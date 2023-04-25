<!doctype html>
<html lang="{'cultureKey'|config}">
    <head>
        {include "parts/00-head"}
    </head>

    <body class="body _template_{'template'|resource} _id_{'id'|resource}">
        {include "parts/10-header"}
        {include "parts/11-navbar"}
        
        {if 'id'|resource != 1}
            <div class="container">
                {'pdoCrumbs'|snippet:[
                    'showHome' => 1,
                    'tplWrapper' => '@INLINE <ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">{$output}</ul>',
                    'tpl' => '@INLINE
                        <li><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a title="{$menutitle}" itemprop="item" href="{$link}"><span itemprop="name">{$menutitle}</span><meta itemprop="position" content="{$idx}"></a>
                        </span></li>',
                    'tplCurrent' => '@INLINE
                        <li><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                        <span itemprop="name">{$menutitle}</span><meta itemprop="position" content="{$idx}">
                    </span></li>'
                ]}

                {if !$no_title}
                    <h1 class="pagetitle">{'pagetitle'|resource|default:$pagetitle}</h1>
                {/if}
            </div>
        {/if}

        {block 'main'}
            <main class="pg-base {('image'|resource) ? '_has-image' : ''} | section container">
                <div class="pg-base__columns">
                    <div>
                        <div class="content">{'content'|resource|modx}</div>
                    </div>
                    {if 'image'|resource} 
                        <div class="pg-base__col-image">
                            <img src="{'image'|resource|src} " alt="">
                        </div>
                    {/if}
                </div>
            </main>
        {/block}

        {block 'blocks'}
            {* @todo выключение блока *}
            {* @todo текст в каталоге *}
            {$blocks = '@FILE blocks'|snippet:[] nocache}

            {* если нет блоков, выводим content *}
            {* {if !$blocks && 'content'|resource}
                <main class="section container">
                    <div class="content">{'content'|resource|modx}</div>
                </main>
            {/if} *}

            {foreach $blocks as $block nocache}
                {$scss[] = "blocks/{$block.tpl}"|replace:'.tpl':''}
            {/foreach}

            {foreach $blocks as $block}
                {$tpl = "parts/{$block.tpl|default:'b-base.tpl'}"}
                {include $tpl}
            {/foreach}
        {/block}

        {include "parts/20-footer"}
        {include "parts/30-modals"}

        <script type="module" src="/app/js/index.js?v=2"></script>
        
        {if $smarty.session['modx.user.contextTokens'].mgr nocache}
            <a target="_blank" href="/manager/?a=resource/update&id={'id'|resource}" id="quick-edit">{'app/libs/bi/pencil-fill.svg'|svg}</a>
        {/if}

        {if $modx->user->sudo}
            {modx}
                <script>
                    console.table({ 'Запросов к БД': '[^q^]', 'Время загрузки': '[^t^]', 'Память': '[^m^]' })
                </script>
            {/modx}
        {/if}

        {'@FILE scss'|snippet:['scss' => $scss] nocache}
        {'@FILE css_js'|snippet nocache}
    </body>
</html>