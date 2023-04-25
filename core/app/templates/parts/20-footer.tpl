<footer class="footer">

    <div class="footer__top">
        <div class="footer__top-row container">
            <div class="footer__first">
                <a href="/" class="footer__logo">
                    <img src="{'logo'|config}" alt="" width="160">
                </a>
            </div>

            <nav class="footer__menu">
                {* <div class="footer__menu-title | h5">Продукция</div> *}
                {'pdoMenu'|snippet:[
                    'parents' => 2,
                    'level' => 1,
                    'tplOuter' => '@INLINE <ul class="">{$wrapper}</ul>',
                    'tpl' => '@INLINE<li {$classes}><a href="{$link}" {$attributes}>{$menutitle}</a></li>'
                ]}
            </nav>

            <nav class="footer__menu">
                {* <div class="footer__menu-title | h5">Навигация</div> *}
                {'pdoMenu'|snippet:[
                    'parents' => 0,
                    'level' => 1,
                    'tplOuter' => '@INLINE <ul class="">{$wrapper}</ul>',
                    'tpl' => '@INLINE<li {$classes}><a href="{$link}" {$attributes}>{$menutitle}</a></li>'
                ]}
            </nav>

            <div class="footer__contacts | vstack">
                <div class="">
                    {include 'parts/contact' type='phone' icon=true}
                </div>
                <div class="">
                    {include 'parts/contact' type='email' icon=true}
                </div>
                <div class="">
                    {include 'parts/contact' type='addr' icon=true}
                </div>
                <div class="_soc">
                    {include 'parts/contact' type='soc'}
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__bottom-row container">
            <div class="footer__copyright">{'copyright'|config|replace:'YEAR':date('Y')}</div>
            <div class="footer__privacy"><a href="/privacy">Политика конфеденциальности</a></div>
        </div>
    </div>

</footer>