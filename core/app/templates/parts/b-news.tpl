{*{
    "name": "Новости"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$items = '@FILE query'|snippet:[
        'limit' => 4,
        'select' => ['content', 'introtext', 'pagetitle', 'publishedon', 'uri', 'image'],
        'sortby' => ['publishedon', 'DESC'],
        'where' => ['parent' => 4]
    ]}
    
    <div>
        <div class="b-news__items | f-carousel f-carousel_default js-carousel">
            {foreach $items as $item}
                <div class="f-carousel__slide">
                    *
                </div>
            {/foreach}
        </div>
    </div>
{/block}
