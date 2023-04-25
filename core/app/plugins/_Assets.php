<?php
namespace App\Plugins;

use \ScssPhp\ScssPhp\Compiler;
use \ScssPhp\ScssPhp\Exception;
require_once MODX_BASE_PATH . '../app/vendor/vendor/autoload.php';


class Assets extends \Zoomx\Elements\Plugin
{

    public $disabled = false;

    public static $events = [
        'OnLoadWebDocument' => 0,
    ];

    private $scss_path = MODX_BASE_PATH . "app/scss";
    

    public function OnLoadWebDocument()
    {   
        if (!is_dir(MODX_ASSETS_PATH . '_cache/compiled')) {
            mkdir(MODX_ASSETS_PATH . '_cache/compiled', 0777, true);
        }
        
        $scss = $scss ?? [];
        $scss = array_unique($scss);
        $page_hash = md5(json_encode($scss));
        
        $scss_time = $this->modx->cacheManager->get('scss_time') ?? 0;
        $scss_time_page = $this->modx->cacheManager->get('scss_time_page_' . $page_hash) ?? 0;
        
        // index
        if ($this->is_changed('scss_time')) {
            $success = false;
            $success = $this->compile_scss('index', "index");
            if ($success) {
                $scss_time = time();
                $this->modx->cacheManager->set('scss_time', $scss_time, 0);
            }
        }
        
        // page
        if ($this->is_changed('scss_time_page_' . $page_hash) || !file_exists(MODX_ASSETS_PATH . "_cache/compiled/page-{$page_hash}.css")) {
            $success = false;
            $success = $this->compile_scss("page-{$page_hash}", $scss ?? []);
        
            if ($success) {
                $scss_time_page = time();
                $this->modx->cacheManager->set('scss_time_page_' . $page_hash , $scss_time_page, 0);
            }
        }
        
        $this->modx->sjscripts[] = "<link rel='stylesheet' href='/assets/_cache/compiled/index.css?v=$scss_time'>";
        $this->modx->sjscripts[] = "<link rel='stylesheet' href='/assets/_cache/compiled/page-{$page_hash}.css?v=$scss_time_page'>";
    }


    private function compile_scss($name, $path)
    {
        try {
            $compiler = new Compiler();
            $compiler->setOutputStyle(\ScssPhp\ScssPhp\OutputStyle::COMPRESSED);
            $compiler->setSourceMap(Compiler::SOURCE_MAP_FILE);
            $compiler->setSourceMapOptions([
                'sourceMapURL' => "./$name.map",
                'sourceMapFilename' => "$name.css",
                'sourceMapBasepath' => $_SERVER['DOCUMENT_ROOT'],
                'sourceRoot' => '/',
            ]);
            if (is_array($path)) {
                $compile = "";
                foreach ($path as $i) {
                    if (file_exists("{$this->scss_path}/$i.scss")) {
                        $compile .= "@import '{$this->scss_path}/$i';";
                    }
                }
            } else {
                $compile = "@import '{$this->scss_path}/$path'";
            }

            $result = $compiler->compileString($compile);
            file_put_contents(MODX_ASSETS_PATH . "_cache/compiled/$name.map", $result->getSourceMap());
            file_put_contents(MODX_ASSETS_PATH . "_cache/compiled/$name.css", $result->getCss());
            return true;
        } catch (\Exception $e) {
            $this->modx->regClientHTMLBlock('
                <div style="position: fixed; top: 0; right: 0; left: 0; z-index: 9999; padding: 1rem; background: DarkRed; color: white;">
                    Ошибка SCSS: ' . $e->getMessage() . '
                </div>
            ');
            return false;
        }
    }


    private function is_changed($name = 'scss_time')
    {
        $scss_changed = false;
        $scss_time = $this->modx->cacheManager->get($name) ?? 0;
        if (!$scss_time) {
            $scss_changed = true;
        } elseif ($this->modx->user->sudo) {
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->scss_path));
            foreach ($files as $file) {
                if ($file->isFile() && $file->getMTime() > $scss_time) {
                    $scss_changed = true;
                    break;
                }
            }
        }
        return $scss_changed;
    }

}