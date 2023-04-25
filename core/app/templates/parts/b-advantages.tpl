{*{
    "name": "Преимущества"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    <div class="b-advantages-items | grid">
        {foreach $gallery as $item}
            <div class="b-advantages-item">
                <div class="b-advantages-item-image">
                    {$svg = $item.image|src|svg}
                    {if $svg}
                        {$svg}
                    {else}
                        <img class="" src="{$item.image|src}" alt="{$item.title|escape}" width="120" height="120" loading="lazy">
                    {/if}                        
                </div>

                <div class="b-advantages-item-title">
                    <b>{$item.title}</b>
                </div>
            </div>
        {/foreach}
    </div>
{/block}
