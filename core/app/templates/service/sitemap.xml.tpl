{'pdoSitemap'|snippet:[
    'tpl' => '@INLINE <url><loc>{$url}</loc><lastmod>{$date}</lastmod><changefreq>{$update}</changefreq><priority>{$priority}</priority></url>',
    'tplWrapper' => '@INLINE <?xml version="1.0" encoding="UTF-8"?><urlset xmlns="{$schema}">{$output}</urlset>'
]}