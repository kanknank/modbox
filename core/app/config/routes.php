<?php
/** @var FastRoute\RouteCollector  $router */
/** @var modX  $modx */

require_once MODX_CORE_PATH . 'app/modules/ajax/routes.php';

$router->get('/admin/blocks', ['\App\Controllers\Admin', 'blocks']);
$router->get('/api/ms/cart/get', ['\App\Controllers\Ms', 'cart_get']);
$router->get('/api/ms/cart/repeat/{id}', ['\App\Controllers\Ms', 'cart_repeat']);
$router->get('/catalog.yml', ['\App\Controllers\Yml']);

$router->get('/sitemap.xml', function() use ($modx) {
    zoomx()->autoloadResource(false);
    return viewx("service/sitemap.xml.tpl");
});

/**
 * Корзина
 */
if (!empty($modx->getOption('modules_shop'))) {
    $router->get('/cart', function() use ($modx) {
        return viewx("order-cart.tpl");
    });

    $router->get('/checkout', function() use ($modx) {
        return viewx("order-checkout.tpl");
    });
}

/**
 * Авторизация и личный кабинет
 */
if (!empty($modx->getOption('modules_profile'))) {
    $router->get('/auth[/{key}]', function($key = '') use ($modx) {
        if ($key == 'logout') {
            $modx->runProcessor('/security/logout');
        }
        if ($modx->user->isAuthenticated($modx->context->key)) {
            redirectx('profile');
        }
        if (!in_array($key, ['login', 'register', 'forgot'])) {
            redirectx('auth/login');
        }
        $modx->resource = zoomx()->getResource("auth-{$key}");
        return viewx("user-auth.tpl", ['section' => $key]);
    });

    $router->get('/profile[/{key}]', function($key = '') use ($modx) {
        if (!$modx->user->isAuthenticated($modx->context->key)) {
            redirectx('auth');
        }
        if (!in_array($key, ['orders', 'update', 'password'])) {
            redirectx('profile/orders');
        }
        $modx->resource = zoomx()->getResource('profile');
        return viewx("user-profile.tpl", ['section' => $key]);
    });
}

/**
 * 
 */
// $router->get('/search', function() use ($modx) {
//     return viewx("search.tpl");
// });

$router->get('/contacts', function() use ($modx) {
    return viewx("contacts.tpl");
});

$router->get('/news', function() use ($modx) {
    return viewx("news.tpl");
});

$router->get('/', function() use ($modx) {
    return viewx("home.tpl");
});
