{extends 'base.tpl'}

{block 'main'}
    {$items = 'pdoResources'|snippet:[
        'depth' => 0,
        'limit' => 0,
        'sortby' => '{ "menuindex": "ASC" }',
        'includeTVs' => 'image',
        'tvPrefix' => '',
        'return' => 'data'
    ]}
    
    <main class="section">
        <div class="container">
            <div class="grid">
                {foreach $items as $item}
                    <a class="card" href="{$item.uri}">
                        <div class="card__image">
                            <picture>
                                <source srcset="{$item.image|src|phpthumbon:'w=300&h=225&zc=1&f=webp'}" type="image/webp">
                                <img src="{$item.image|src}" alt="" width="300" height="225" loading="lazy">
                            </picture>
                        </div>
                        <div class="card__body">
                            <div class="card__title">{$item.pagetitle}</div>                   
                        </div>
                    </a>
                {/foreach}
            </div>
        </div>
    </main>
{/block}