{*{
    "name": "Карта"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    <div class="ya-map" data-map='{3|field:'contacts_map'}'></div>
{/block}
