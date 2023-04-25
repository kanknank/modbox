{* задаём переменные (распаковываем из массивов) *}
{$block.gallery = json_decode($block.gallery, true)}
{foreach $block as $key => $val}
    {assign $key $val}
{/foreach}

{* классы блока*}
{$classes = [
    'section',
    "{$block.tpl}"|replace:'.tpl':'',
    "_id_{'id'|resource}-{$MIGX_id}",
    $block.bg_class
]}

{* фоновая картинка*}
{if $image_bg}
    <style>
        .b-{$block.tpl}.{"_id_{'id'|resource}-{$MIGX_id}"} {
            background-image: url('{$image_bg|src|phpthumbon:"f=webp"}')
        }
    </style>
{/if}


{block 'section'}
    <section class="{implode(' ', $classes)}" id="section_id_{'id'|resource}-{$MIGX_id}">
        <div class="container">
            {block 'section-header'}
                {if $block.show_title}
                    <div class="section__header">
                        <h2 class="section__title | h1 font-title">{$title|markdown}</h2>
                        {if $link} 
                            {$link = explode('==', $link)}
                            <a href="{$link[1]|url}" class="font-bolder">{$link[0]} {'app/icons/arrow.svg'|svg}</a>
                        {/if}
                    </div>
                {/if}
            {/block}

            {block 'section-main'}
                <div class="content">{$content|modx}</div>
            {/block}
        </div>
    </section>
{/block}