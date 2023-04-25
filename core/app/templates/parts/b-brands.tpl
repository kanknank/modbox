{*{
    "name": "Бренды"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$brands = '@FILE query'|snippet:[
        'class' => 'msVendor',
        'select' => ['name', 'logo']
    ]}

    <div class="b-brands__row">
        {foreach $brands as $item}
            <div class="b-brands__item">
                <img src="{$item.logo}" alt="{$item.name|escape}" loading="lazy">
            </div>
        {/foreach}
    </div>
{/block}
