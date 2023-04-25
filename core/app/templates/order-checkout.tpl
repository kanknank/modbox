{extends 'base.tpl'}
{* {$no_title = 1} *}

{block 'main'}
    {$scss[] = 'templates/order-checkout' nocache}

    {capture assign="order_tpl" nocache} {literal} @INLINE

        {function field field='' label='' type='text' attrs=''}
            <label class="field | input-parent">
                <input class="input" id="{$field}" type="{$type}" name="{$field}" value="{$form[$field]}" placeholder=" " {$attrs}>
                <div class="field-label">{$label}</div>
            </label>
        {/function}

        {$form.delivery = $order.delivery|default:array_key_first($deliveries)}

        <form class="pg-checkout__form | vstack | js-form ms2_form" id="msOrder" method="post" x-data='{json_encode($form)}'>

            {* не знаю, зачем этот массив, у меня он всегда пустой *}
            {if count($errors)} {$errors|print} {/if}

            {field field='receiver' label='Ф.И.О.' attrs='required'}
            {field field='phone' label='Телефон' type='tel' attrs='required'}
            {field field='email' label='Email' type='email' attrs='required'}

            <div class="pg-checkout__delivery | vstack">
                <div class="h6">Выберите способ доставки:</div>
                {foreach $deliveries as $item}
                    {$checked = ($item.id == $order.delivery || (!$order.delivery|in_array:$deliveries && $item@first)) ? 'checked' : ''}
                    <label class="radio | input-parent">
                        <input type="radio" name="delivery" value="{$item.id}" id="delivery_{$item.id}"
                            data-payments="{$item.payments|@json_encode}"
                            x-model="delivery"
                            {$checked}>
                        <span class="radio-check"></span>
                        <span>{$item.name}</span>
                    </label>
                {/foreach}
            </div>

            {* не показываем, если самовывоз *}
            {* убираем required если скрыто *}
            {* не убирать из dom через x-if, работает некорректо *}
            {$attrs = ':required="delivery != 1"'}
            <div x-show="delivery != 1">
                {field field='text_address' label='Город, улица, дом, этаж, квартира' attrs=$attrs }
            </div>

            <label class="field">
                <textarea class="input" name="comment" placeholder=" ">{$form.comment}</textarea>
                <span class="field-label">Комментарий</span>
            </label>
            
            <div class="pg-checkout__total-row" x-data="msReactive" x-show="cart.loaded">
                <div class="pg-checkout__total-row-text">После оформления заказа менеджер свяжется с вами, чтобы уточнить все детали</div>
                <div>
                    <div class="pg-checkout__total-row-count">Итого <span x-text="cart.status.total_count"></span> шт. на сумму</div>
                    <div class="pg-checkout__total-row-sum | font-bold" x-text="priceFormat(cart.status.total_cost)"></div>
                </div>
            </div>

            <div class="">
                <button class="button _fullwidth" type="submit" name="ms2_action" value="order/submit">Оформить заказ</button>
            </div>

            {* <div class="form-privacy">
                Отправляя данные через форму, вы соглашаетесь с <a href="{9|url}" target="_blank">Политикой обработки персональных данных</a>
            </div> *}

            <div class="pg-checkout__delivery | vstack" style="visibility: hidden; height: 0; overflow: hidden; margin: 0; padding: 0" hidden>
                <div class="h6">Выберите способ оплаты:</div>
                {foreach $payments as $item}
                    {$checked = ($item.id == $order.payment || (!$order.payment|in_array:$payment && $item@first)) ? 'checked' : ''}
                    <label class="radio | input-parent">
                        <input type="radio" name="payment" value="{$item.id}" id="payment_{$item.id}" {$checked}>
                        <span class="radio-check"></span>
                        <span>{$item.name}</span>
                    </label>
                {/foreach}
            </div>
        </form>
    
    {/literal} {/capture}


    {if $smarty.get.msorder nocache}
        <main class="container">
            <div class="form-box is-fullwidth">
                <h1 class="form-box-title h2">Спасибо за заказ!</h1>
                <div style="text-align: center">
                    <a class="button" href="/">На главную</a>
                </div>
            </div>
        </main>
    {else}
        <main class="pg-checkout | section container">
            <div class="pg-checkout__columns">
                {'msOrder'|snippet:[
                    'tpl' => $order_tpl
                ] nocache}
            </div>
        </main>
    {/if}

{/block}