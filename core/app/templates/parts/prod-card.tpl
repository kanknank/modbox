{*$gallery = '@FILE ms_gallery'|snippet:['id' => $item.id]*}

<div class="prod-card _hoverable">
    <div class="prod-card__badges prod-badges">
        {if $item.favorite == 1}
            <div class="prod-badges__item _action">Акция</div>
        {/if}
        {if $item.new == 1}
            <div class="prod-badges__item _new">Новинка</div>
        {/if}
        {if $item.popular == 1}
            <div class="prod-badges__item _hit">Хит</div>
        {/if}
    </div>

    <label class="prod-card__favorite">
        <input type="checkbox" value="{$item.id}" x-model="$store.favorites">
        {'/app/libs/bi/heart.svg'|svg}
        {'/app/libs/bi/heart-fill.svg'|svg}
    </label>

    <a class="prod-card__gallery" href="{$item.uri}">
        {if $item.webp}
            <picture>
                <source srcset="{$item.webp}" type="image/webp">
                <img src="{$item.small}" alt="" width="300" height="300">
            </picture>
        {else}
            <img src="{'noimage'|phpthumbon:'w=300&h=300&zc=1'}" alt="">
        {/if}        
        {* <div class="carousel | js-carousel-hover">
            {foreach $gallery as $img}
                <div class="carousel__slide">
                    <img src="{$img.url|phpthumbon:"w=306&h=230&zc=1&f=webp"}" width="306" height="230" alt='{$item.pagetitle|escape}'>
                </div>
            {/foreach}
        </div> *}
    </a>

    <a class="prod-card__body" href="{$item.uri}">
        <div class="prod-card__title | font-bolder" href="{$item.uri}">
            {$item.pagetitle}
        </div>

        <div class="prod-card__prices | font-bold">
            {if $item.old_price && $item.price < $item.old_price}
                <div class="prod-card__price-old prod-price-old">{$item.old_price|price_format} ₽</div>
            {/if}
            <div class="prod-card__price">{$item.price|price_format} ₽</div>
        </div>
    </a>

    <div class="prod-card__footer">
        <template x-if="getQty({$item.id})">
            <div class="prod-card__qty | prod-qty">
                <button class="button _light" @click="cartChange({$item.id}, -1)">{'/app/libs/bi/dash-lg.svg'|svg}</button>
                <span x-text="getQty({$item.id})" class=""></span>
                <button class="button _light" @click="cartChange({$item.id}, 1)">{'/app/libs/bi/plus-lg.svg'|svg}</button>
            </div>
        </template>

        <template x-if="!getQty({$item.id})">
            <button class="prod-card__add | button _light _fullwidth" @click="cartAdd({$item.id})">
                {'/app/libs/bi/cart-plus.svg'|svg}
                <span>В корзину</span>
            </button>
        </template>
    </div>
</div>
