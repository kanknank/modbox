{*{
    "name": "Категории каталога"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$items = '@FILE query'|snippet:[
        'limit' => $limit|default:12,
        'select' => ['pagetitle', 'image', 'uri'],
        'where' => ['parent' => $parent|default:('id'|resource)]
    ]:0}

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
{/block}
