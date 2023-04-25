<?php
require_once MODX_CORE_PATH . 'app/modules/ajax/elements.php';

$elementService->addSnippetPath(MODX_CORE_PATH . 'app/snippets/');

zoomx()->getLoader()->addPsr4('App\\Plugins\\', MODX_CORE_PATH . 'app/plugins/');
zoomx()->getLoader()->addPsr4('App\\Controllers\\', MODX_CORE_PATH . 'app/controllers/');
parserx()->loadFilter('pre', 'ajax');

//добавляем плагин
// $elementService->registerPlugins([
//     App\Plugins\Assets::class,
// ]);