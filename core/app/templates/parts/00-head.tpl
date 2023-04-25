{$favicon = 'favicon'|config}
{$title = 'longtitle'|resource:'pagetitle'|cat:' | '|cat:('site_name'|config)}
{$description = 'description'|resource}

<base href="{'site_url'|config}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

{*favicons*}
<link rel="apple-touch-icon" sizes="180x180" href="{$favicon|phpthumbon:'w=180&h=180&zc=1'}">
<link rel="icon" type="image/png" sizes="32x32" href="{$favicon|phpthumbon:'w=32&h=32&zc=1'}">
<link rel="icon" type="image/png" sizes="16x16" href="{$favicon|phpthumbon:'w=16&h=16&zc=1'}">

{*seo*}
<title>{$title|escape}</title>
<meta name="description" content="{$description|escape}">
<link rel="canonical" href="{'id'|resource|url:['scheme'=>'full']}">
<meta property="og:type" content="website">
<meta property="og:title" content="{$title|escape}">
<meta property="og:description" content="{$description|escape}">
<meta property="og:url" content="{'id'|resource|url:['scheme'=>'full']}">
<meta property="og:image" content="{'site_url'|config}{'image'|resource|default:$favicon}">
{'ss_meta.keywords'|ph}

{*libs*}
{'https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js'|js}
{'https://unpkg.com/htmx.org@1.7.0/dist/htmx.min.js'|js}
{'https://cdn.jsdelivr.net/npm/maska@2/dist/maska.umd.js'|js}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css'|css}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js'|js}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css'|css}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js'|js}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.css'|css}
{'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.umd.js'|js}
{*для магазина*}
{'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.css'|css}
{'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.js'|js}

{*js*}
{'/app/js/main.js'|js}
{'/app/js/forms.js'|js}
{'/app/js/maps.js'|js}
{'/app/js/products.js'|js}
{'/app/js/msreactive.js'|js}

{'https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js'|js}

{*fonts*}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">