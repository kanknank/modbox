<?php
namespace App\Controllers;
use Zoomx\Controllers;

class Admin extends \Zoomx\Controllers\Controller
{
    public function blocks()
    {
        zoomx()->autoloadResource(false);

        if (!$this->modx->user->sudo) {
            return 'Доступ запрещён';
        }
        
        $this->modx->addPackage('migx', MODX_CORE_PATH . 'components/migx/model/');

        $default_settings = [
            ['field' => 'title', 'caption' => 'Название / заголовок'],
            ['field' => 'show_title', 'caption' => 'Показывать заголовок', 'inputTVtype' => 'checkbox', 'inputOptionValues' => 'Да==1'],
            [
                'field' => 'bg_class', 'caption' => 'Цвет фона', 'inputTVtype' => 'listbox',
                'inputOptionValues' => 'Не выбран==||Серый==bg-light||Основной==bg-primary||Тёмный==bg-dark',
            ],
            ['field' => 'image_bg', 'caption' => 'Фоновое изображение', 'inputTV' => 'image'],
            ['field' => 'resource', 'caption' => 'Ресурс'],
        ];

        $blocks = [
            [
                'tpl' => 'b-base.tpl',
                'name' => 'Текст',
            ]   
        ];

        // ищем параметры в tpl
        $fileObject = new \DirectoryIterator(MODX_CORE_PATH . 'app/templates/parts');
        foreach($fileObject as $file) {
            if ($file->isDot() || $file->isDir()) continue;
            
            $content = file_get_contents(MODX_CORE_PATH . 'app/templates/parts/' . $file->getFilename());
            preg_match_all('/\{\*\{(.*?)\}\*\}/s', $content, $matches);
            
            if ($matches[1] && $matches[1][0]) {
                $json = '{' . $matches[1][0] . '}';
                $array = json_decode($json, true);
                
                if (!empty($array)) {
                    $array['tpl'] = $file->getFilename();
                    $blocks[] = $array;
                }
            }
        }

        foreach ($blocks as $block) {
            $config = [
                'name' => $block['tpl'],
                'extended' => [
                    'multiple_formtabs_field' => 'tpl',
                    'multiple_formtabs_optionstext' => $block['name'],
                    'multiple_formtabs_optionsvalue' => $block['tpl'],    
                ]
            ];

            $tmp = $block['params'];
            $block['params'] = [];
            $block['params']['Основные настройки'] = $default_settings;
            $block['params']['Настройки блока'] = $tmp;

            foreach ($block['params'] as $tab_caption => $fields) {
                $formtab = [
                    'caption' => $tab_caption,
                ];
                foreach ($fields as $field) {
                    $formtab['fields'][] = $field;
                }
                $config['formtabs'][] = $formtab;
            }
            
            echo '<pre>';
            print_r($block['tpl'] . ' ');
            print_r($config['formtabs']);
            echo '</pre>';

            $config['formtabs'] = json_encode($config['formtabs']);
            $configs[] = $config;
        }

        $multiple_formtabs = [];

        foreach ($configs as $config_name => $config) {
            $obj = $this->modx->getObject('migxConfig', ['name' => $config['name']]);
            if (empty($obj)) {
                $obj = $this->modx->newObject('migxConfig');
            }
            $obj->fromArray($config);
            $obj->save();
            $multiple_formtabs[] = $obj->id;
        } 

        $obj = $this->modx->getObject('migxConfig', ['name' => 'blocks']);
        $ext = json_decode($obj->extended, true);
        $ext['multiple_formtabs'] = implode('||', $multiple_formtabs);
        $obj->set('extended', $ext);
        $obj->save();
    }
}
