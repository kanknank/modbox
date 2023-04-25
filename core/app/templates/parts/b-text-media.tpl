{*{
    "name": "Текст + медиа",
    "params": [
        {
            "field": "text_pos", "caption": "Позиция колонки с текстом", "inputTVtype": "listbox", "inputOptionValues": "Слева==left||Справа==right"
        }
    ]
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    <div class="b-text-media__columns {($text_pos == 'right') ? '_inverted' : ''}">
    
        <div class="b-text-media__text">
            <div class="content">{$content|modx}</div>
        </div>

        <div class="b-text-media__media">
            {$w = 616}
            <picture>
                <source srcset="{$image|src|phpthumbon:"w={$w}&f=webp" }" type="image/webp">
                <img src="{$img}" alt="" width="{$w}" loading="lazy">
            </picture>
        </div>
    </div>
{/block}