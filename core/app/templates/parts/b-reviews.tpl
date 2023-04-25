{*{
    "name": "Отзывы"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$items = '@FILE query'|snippet:[
        'limit' => 4,
        'select' => ['content', 'pagetitle', 'uri', 'image'],
        'where' => ['parent' => 14]
    ]:0}

    <div class="b-reviews-items | carousel carousel-default js-carousel">
        {foreach $items as $item}
            <div class="carousel__slide">
                <div class="b-review-item | card">
                    <div class="card__body">
                        <div class="card__title"><b>{$item.pagetitle}</b></div>
                        <div class="card__text">{$item.introtext|default:$item.content}</div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/block}