{extends 'base.tpl'}

{block 'main'}
    {$scss[] = 'templates/order-cart' nocache}

    <main class="pg-cart | section container" x-data="msReactive">
        <template x-if="cart.loaded && !cart.status.total_count">
            <div class="content">Корзина пуста</div>
        </template>
        
        <template x-if="cart.loaded && cart.status.total_count">
            <div class="pg-cart__columns">

                <ul class="pg-cart__list">
                    <template x-for="item in cart.items">
                        <li class="pg-cart__row | font-bolder">
                            <a class="pg-cart__row-image" :href="item.uri">
                                <img width="80" height="80" :src="item.thumb" alt="">
                            </a>

                            <a class="pg-cart__row-title" :href="item.uri">
                                <div x-text="item.pagetitle"></div>
                            </a>
                            
                            <div class="pg-cart__row-prices">
                                <div class="pg-cart__row-price-old | prod-price-old" x-show="item.old_price" x-text="priceFormat(item.old_price)"></div>
                                <div class="pg-cart__row-price" x-text="priceFormat(item.price)"></div>
                            </div>

                            <div class="pg-cart__row-qty | prod-qty">
                                <button class="{*button _light}*}" @click="cartChange(item.key, -1)">{'/app/libs/bi/dash-lg.svg'|svg}</button>
                                <span x-text="item.count" class="font-bolder"></span>
                                <button class="{*button _light}*}" @click="cartChange(item.key, 1)">{'/app/libs/bi/plus-lg.svg'|svg}</button>
                            </div>

                            <div class="pg-cart__row-sum">
                                <div class="font-bold" x-text="priceFormat(item.price * item.count)"></div>
                            </div>

                            <div class="pg-cart__row-remove">
                                <button @click="cartChange(item.key, 0)">{'/app/icons/delete.svg'|svg}</button>
                            </div>
                        </li>
                    </template>
                </ul>

                <div class="pg-cart__result">
                    <div class="pg-cart__result-header">
                        <div class="pg-cart__result-title | h4">В корзине</div>
                        <div class="pg-cart__result-count"><span x-text="cart.status.total_count"></span> товаров</div>
                    </div>

                    <div class="pg-cart__result-row">
                        <div class="pg-cart__result-text">После оформления заказа менеджер свяжется с вами, чтобы уточнить все детали</div>
                        <div class="pg-cart__result-sum | font-bold" x-text="priceFormat(cart.status.total_cost)"></div>
                    </div>

                    <div>
                        <a class="button _fullwidth" href="/checkout">Перейти к оформлению</a>
                    </div>
                </div>

            </div>
        </template>
    </main>

{/block}