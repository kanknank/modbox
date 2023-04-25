{*{
    "name": "Товары"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$props = [
        'limit' => 12,
        'parents' => null,
        'return' => 'JSON',
        'includeThumbs' => 'webp,small'
    ]}
    
    {if $type == 'all'}
        {$props.where = ['popular = 1 OR new = 1 OR favorite = 1']}
    {else if (in_array($type, ['new', 'favorite', 'popular']))}
        {$props.where = ["{$type} = 1"]}
    {else if ($type == 'similar')}
        {$props.parents = 'parent'|resource}
        {$props.where = ["msProduct.id != "|cat:('id'|resource)]}
    {/if}

    {$products = 'msProducts'|snippet:$props}
    
    <div class="prod-cards" x-data="msReactive">
        <div class="f-carousel f-carousel_default | js-carousel">
            {foreach json_decode($products, true) as $item}
                <div class="f-carousel__slide">
                    {include 'parts/prod-card'}
                </div>
            {/foreach}
        </div>
    </div>
{/block}

{*
'where' => ['popular = 1 OR new = 1 OR favorite = 1'],
*}

    {* "params": {
        "Настройки блока": [
            {
                "field": "type", "caption": "Тип", "inputTVtype": "listbox",
                "inputOptionValues": "Все акции==all||Новинки==new||Особые==favorite||Хиты==popular"
            }
        ]
    } *}