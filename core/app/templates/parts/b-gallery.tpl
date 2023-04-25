{*{
    "name": "Фотогалерея"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    <div class="carousel carousel-default js-carousel">
        {foreach $gallery as $item}
            <div class="carousel__slide">
                <a class="b-gallery__item | card" href="{$item.image|src}"
                    data-fancybox="b-gallery" data-caption="{$item.title|escape}">
                    <div class="card__image">
                        <picture>
                            <source srcset="{$item.image|src|phpthumbon:'w=306&h=230&zc=1&f=webp'}" type="image/webp">
                            <img src="{$item.image|src}" alt="{$item.title|escape}" width="306" height="230" loading="lazy">
                        </picture>
                    </div>
                </a>
            </div>
        {/foreach}
    </div>
{/block}
