<?php
namespace App\Controllers;
use Zoomx\Controllers;

class Yml extends \Zoomx\Controllers\Controller
{

    public function index()
    {
        Header('Content-type: text/xml');
        zoomx()->autoloadResource(false);

        // categories
        $q = $this->modx->newQuery('modResource');
        $q->select(array(
            'id',
            'parent',
            'pagetitle',
        ));
        $q->where(array(
            "published" => 1,
            "deleted" => 0,
            "parent:!=" => 0,
            'class_key' => 'msCategory'
        ));
        $q->prepare();
        $q->stmt->execute();
        $q_result = $q->stmt->fetchAll(\PDO::FETCH_ASSOC);

        $categories = [];
        foreach($q_result as $i) {
            $categories[$i['id']] = $i;
        }
        
        // products
        $q = $this->modx->newQuery('modResource');
        $where = [
            "published" => 1,
            "deleted" => 0,
            'class_key' => 'msProduct',
            //'template' => 7,
        ];
        $select = [
            'modResource.id as id',
            'modResource.parent as parent',
            'modResource.pagetitle as pagetitle',
            'modResource.content as content',
            'ms.article as article',
            'ms.price as price',
            'ms.old_price as old_price',
            'ms.image as image',
        ];
        $q->select($select);
        $q->where($where);
        $q->innerJoin('msProductData', 'ms', 'ms.id = modResource.id');
        $q->prepare();
        $q->stmt->execute();
        $q_result = $q->stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $offers = [];
        foreach($q_result as $k=>$i) {
            $offers[$i['id']] = $i;
        }

        $yml_catalog = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><yml_catalog/>');
        $yml_catalog->addAttribute('date', date("Y-m-d H:i"));
        $shop = $yml_catalog->addChild('shop');
        // $shop->addChild('name',$this->settings['name']);
        // $shop->addChild('company',$this->settings['company']);
        // $shop->addChild('url',$this->settings['url']);
        // $shop->addChild('email',$this->settings['email']);

        $currencies = $shop->addChild('currencies');
        $currency = $currencies->addChild('currency');
        $currency->addAttribute('id', 'RUR');

        $categories_node = $shop->addChild('categories');
        $categoriesTmp = [];
        foreach($categories as $k=>$i) {
            $categoriesTmp[$k] = $categories_node->addChild('category', $i['pagetitle']);
            $categoriesTmp[$k]->addAttribute('id', $k);
            $categoriesTmp[$k]->addAttribute('parentId', $i['parent']);
        }


        $offers_node = $shop->addChild('offers');
        $offersTmp = [];
        foreach($offers as $k => $i) {
            $offersTmp[$k] = $offers_node->addChild('offer'/*, $i['pagetitle']*/);
            $offersTmp[$k]->addAttribute('id', $k);
            $offersTmp[$k]->addChild('name', str_replace('<br>',' ',$i['pagetitle']));
            $offersTmp[$k]->addChild('url', $this->modx->makeUrl($k,'','','full'));
            $offersTmp[$k]->addChild('price', $i['price'] ?? 0);
            if((float)$i['old_price']) {
                $offersTmp[$k]->addChild('oldprice', $i['old_price']);
            }
            $offersTmp[$k]->addChild('vendorCode', $i['article'] ?: $i['id']);
            $offersTmp[$k]->addChild('available', 'true');
            $offersTmp[$k]->addChild('currencyId', 'RUR');
            $offersTmp[$k]->addChild('categoryId', $i['parent']);
            if ($i['image']) {
                $offersTmp[$k]->addChild('picture', $this->modx->getOption('site_url') . $i['image']);
            }

            if ($i['content']) {
                $text = $i['content'];
                $text = str_replace(array('<p>','</p>'),array('',"\n"),$text);
                $text = str_replace(array('<li>','</li>'),array('— ',""),$text);
                $text = html_entity_decode(strip_tags($text));
                $offersTmp[$k]->addChild('description', $text);
            }

        }

        print ($yml_catalog->asXML());

    }

}
