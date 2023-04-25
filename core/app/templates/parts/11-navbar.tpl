{$menu = 'pdoMenu'|snippet:[
    'parents' => 0,
    'resources' => '-1',
    'level' => 2,
    'levelClass' => 'navbar__menu-lvl-',
    'parentClass' => 'navbar__menu-parent',
    'innerClass' => 'navbar__menu-submenu',
    'tplOuter' => '@INLINE {$wrapper}',
'tplInner' => '@INLINE <ul {$classes}>{$wrapper}</ul>',
'tplParentRow' => '@INLINE
<li {$classes}>
    <a class="navbar__menu-link" href="{$link}" {$attributes}>{$menutitle}
        {"/app/libs/bi/chevron-down.svg"|svg}</a>{$wrapper}
    {$wrapper}
</li>',
'tpl' => '@INLINE
<li {$classes}><a class="navbar__menu-link" href="{$link}" {$attributes}>{$menutitle}</a>{$wrapper}</li>'
]}

<div class="navbar">
    <div class="navbar__row | container">
        <button class="navbar__burger" data-src="#navbar__mobile" data-fancybox-class="navbar__mobile" data-fancybox>
            {'/app/libs/bi/list.svg'|svg}
        </button>

        <a href="/" class="navbar__logo">
            <img src="{1|field:'logo'}" alt="" width="224" height="44">
        </a>

        <ul class="navbar__menu">
            {$menu}
        </ul>

        {if 'modules_favorites'|config}
            <a class="navbar__cart" href="/favorites" x-data>
                <div class="navbar__cart-icon">
                    {'/app/libs/bi/heart.svg'|svg}
                    <template x-if="$store.favorites.length">
                        <span class="navbar__cart-count" x-text="$store.favorites.length"></span>
                    </template>
                </div>
            </a>
        {/if}


        {if 'modules_shop'|config}
            <a class="navbar__cart" href="/cart">
                <div class="navbar__cart-icon">
                    {'/app/libs/bi/cart.svg'|svg}
                    {'msMiniCart'|snippet:[
                        'tpl' => '@INLINE <span class="navbar__cart-count | ms2_total_count">{$total_count}</span>'
                    ] nocache}
                </div>
            </a>
        {/if}

        {if 'modules_profile'|config}
            <a class="navbar__profile" href="/auth/login">
                {guest nocache}
                {'/app/libs/bi/person.svg'|svg}
                {* <span>Войти в ЛК</span> *}
                {/guest}
                {auth nocache}
                {'/app/libs/bi/person-check.svg'|svg}
                {* <span>Личный<br>кабинет</span> *}
                {/auth}
            </a>
        {/if}
    </div>
</div>


<div class="navbar__mobile-inner" id="navbar__mobile" hidden>
    <a href="/" class="navbar__mobile-logo">
        <img src="{1|field:'logo'}" alt="" width="128" height="34">
    </a>

    <ul class="navbar__mobile-menu">
        {$menu}
    </ul>

    <div class="navbar__mobile-contacts">
        <div>{$phones}</div>
        <div class="navbar__mobile-soc">{$soc}</div>
    </div>
</div>