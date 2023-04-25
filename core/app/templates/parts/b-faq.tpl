{*{
    "name": "Вопрос-ответ"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    {$items = '@FILE query'|snippet:[
        'select' => ['id', 'pagetitle', 'content'],
        'where' => ['parent' => $block.id]
    ]:0}

    <div class="b-faq-items">
        {foreach $items as $item}
            <div class="b-faq-item | spoiler | js-spoiler">
                <div class="b-faq-item-title | spoiler-title" role="button">{$item.pagetitle}</div>
                <div class="b-faq-item-content | spoiler-content content">{$item.content}</div>
            </div>
        {/foreach}
        Блок не готов
    </div>
{/block}
