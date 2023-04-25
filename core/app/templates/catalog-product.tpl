{*@todo badges*}
{extends 'base.tpl'}

{block 'main'}
    {$scss[] = 'templates/catalog-product' nocache}

    {$res = $modx->resource->toArray()}
    {$gallery = '@FILE ms_gallery'|snippet}

    <main class="pg-product__columns | container section">
        <div class="pg-product__gallery">
            <div class="product-gallery-main | f-carousel | js-carousel">
                {foreach $gallery as $item}
                    <a class="f-carousel__slide" href="{$item.url}" data-fancybox="gallery">
                        <img src='{$item.url|phpthumbon:"w=450&h=450&far=C&bg=ffffff"}' width="450" alt="">
                    </a>
                {/foreach}
            </div>
        </div>

        <div class="pg-product__middle">
            <ul class="pg-product__chars">
                {foreach $res as $key => $item}
                    {if mb_stripos($key, '.key') !== false}
                        {$prop = str_replace('.key', '', $key)}
                        {if !empty($res["{$prop}.value"])}
                            <li>
                                <div class="color-muted">{$res["{$prop}.caption"]}:&nbsp;</div>
                                <div class="">{$res["{$prop}.value"]} {$res["{$prop}.measure_unit"]}</div>
                            </li>
                        {/if}
                    {/if}
                {/foreach}
                <li>
                    <div class="color-muted">Артикул:&nbsp;</div>
                    <div class="">{$res.article|default:'—'}</div>
                </li>
            </ul>

            <div class="pg-product__separator"></div>

            <div class="pg-product__question | bg-light is-rounded">
                <div class="font-bold">Остались вопросы по товару?</div>
                <div>
                    <button class="button _outlined _gray" data-src="#modal-consult" data-fancybox>Онлайн консультация</button>
                </div>
            </div>
        </div>

        <div class="pg-product__right" x-data="msReactive" x-show="cart.loaded" x-cloak>
            <div class="pg-product__prices | font-bold">
                {if $res.old_price && $res.price < $res.old_price}
                    <div class="pg-product__oldprice | prod-price-old">{$res.old_price|price_format} ₽</div>
                {/if}
                <div class="pg-product__price">
                    <span class="pg-product__price-val">{$res.price|price_format}</span> ₽{* / шт.*}
                </div>
            </div>

            <div class="pg-product__buy">
                <template x-if="getQty({$res.id})">
                    <div class="prod-buy">
                        <a href="/cart" class="button _fullwidth">Оформить заказ</a>
                        
                        <div class="prod-card__qty | prod-qty">
                            <button class="{*button _light}*}" @click="cartChange({$res.id}, -1)">{'/app/libs/bi/dash-lg.svg'|svg}</button>
                            <span x-text="getQty({$res.id})" class="font-bolder"></span>
                            <button class="{*button _light}*}" @click="cartChange({$res.id}, 1)">{'/app/libs/bi/plus-lg.svg'|svg}</button>
                        </div>
                    </div>
                </template>

                <template x-if="!getQty({$res.id})">
                    <button class="prod-card__add | button _fullwidth" @click="cartAdd({$res.id})"><span>В корзину</span></button>
                </template>
            </div>

            <div class="pg-product__bonus in-work"><b>+150</b> бонусов за покупку</div>

            <div class="pg-product__separator"></div>

            <ul class="pg-product__deliveries in-work">
                <li>
                    <div class="font-bold">Самовывоз</div>
                    <div>Сегодня до 18:00 из магазина г. Донецк</div>
                </li>
                <li>
                    <div class="font-bold">Доставка</div>
                    <div>Завтра по г. Донецк, 27 января от 350 ₽</div>
                </li>
            </ul>
        </div>
    </main>
{/block}

{block 'blocks'}
    {if 'content'|resource}
        {include 'parts/section.tpl' block=[
            'content' => 'content'|resource,
            'show_title' => 1,
            'title' => 'Описание'
        ]}
    {/if}

    {include 'parts/b-products.tpl' block=[
        'type' => 'similar',
        'show_title' => 1,
        'title' => 'Похожие товары',
        'link' => "Все предложения=={'parent'|resource}"
    ]}
{/block}