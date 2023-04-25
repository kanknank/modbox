{*{
    "name": "Слайдер"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$gallery = json_decode($resource|field:'gallery', true)}
    
    <div class="hero__slider | is-dark | f-carousel js-slider">
        {foreach $gallery as $item}
            <div class="f-carousel__slide">
                <div class="hero__slider-slide">
                    <div class="hero__slider-content">
                        <div class="hero__slider-title | h1">{$item.description}</div>
                        <div class="hero__slider-subtitle | font-bolder">{$item.title}</div>
                        <div class="hero__slider-more">
                            <a href="{$item.alt|default:1|url}" class="button _white _outlined">
                                <span>Подробнее</span>
                            </a>
                        </div>
                    </div>

                    <picture>
                        <source srcset="{$item.image|src|phpthumbon:'w=1296&h=500&zc=1&f=webp'}" type="image/webp">
                        <img src="{$item.image|src}" alt="" width="1296" height="500">
                    </picture>
                </div>
            </div>
        {/foreach}
    </div>
{/block}