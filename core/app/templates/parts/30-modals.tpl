<div class="" id="modal_callback" hidden>
    <form action="" class="form _modal | js-form" hx-post="ajax/modal_callback">
        {ajax key='modal_callback'}     

            {$form = '@FILE form'|snippet:[
                'form_title' => 'Заказать звонок',
                'form_ya_target' => 'modal_callback'
            ]}

            <div class="form__title h2 font-title">Заказать звонок</div>

            {if $form.success}
                {$form.successMessage}
            {else}
                {include 'components/form-field' name='fullname' label='Ваше имя' attrs='required'}
                {include 'components/form-field' name='phone' label='Ваш телефон' type='tel' attrs='required'}
                {$form.validation_error_message}
                <div class="form__footer">
                    <button class="button _fullwidth" type="submit">Отправить</button>
                </div>
                {$form.privacy_text}
            {/if}

        {/ajax}
    </form>
</div>

<div class="modal-consult" id="modal-consult" hidden>
    <div class="vstack">
        <h2 class="h3">Онлайн консультация</h2>
        <div class="modal-consult__descr">Выберите любой удобный для Вас мессенджер и оставьте в нем заявку</div>
        <div class="modal-consult__sep"></div>
        <div class="modal-consult__soc">
            {include 'parts/contact' type='soc'}
        </div>
        <div class="modal-consult__time">Онлайн консультация с 10:00 до 20:00</div>
    </div>
</div>

<div id="fb-catalog" hidden>
    <div class="fb-menu__header">
        {'/app/icons/menu.svg'|svg}
        <div class="fb-menu__header-title | font-bold">Каталог товаров</div>
        <button onclick="Fancybox.close()">{'/app/icons/cancel.svg'|svg}</button>
    </div>
    
    <ul class="fb-menu__items">
        <li>
            <button class="font-bold" onclick="Fancybox.close()" data-fancybox-menu data-src="#fb-menu">
                <span>Меню</span>
                {'/app/icons/chevron.svg'|svg}
            </button>
        </li>
        {'pdoMenu'|snippet:[
            'parents' => 2,
            'level' => 1,
            'tplOuter' => '@INLINE {$wrapper}',
            'tpl' => '@INLINE <li {$classes}><a class="font-bolder" href="{$link}" {$attributes}>{$menutitle}</a></li>'
        ]}
    </ul>
</div>

<div id="fb-menu" hidden>
    <div class="fb-menu__header">
        {'/app/icons/menu.svg'|svg}
        <div class="fb-menu__header-title | font-bold">Меню</div>
        <button onclick="Fancybox.close()">{'/app/icons/cancel.svg'|svg}</button>
    </div>
    
    <ul class="fb-menu__items">
        <li>
            <button class="font-bold" onclick="Fancybox.close()" data-fancybox-menu data-src="#fb-catalog">
                <span>Каталог товаров</span>
                {'/app/icons/chevron.svg'|svg}
            </button>
        </li>
        {'pdoMenu'|snippet:[
            'parents' => 0,
            'level' => 1,
            'tplOuter' => '@INLINE {$wrapper}',
            'tpl' => '@INLINE <li {$classes}><a class="font-bolder" href="{$link}" {$attributes}>{$menutitle}</a></li>'
        ]}
    </ul>
</div>