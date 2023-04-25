<label class="field">
    {if "fi.error.$name"|ph}
        <div class="field-error">{"fi.error.$name"|ph}</div>
    {/if}
    
    {if $type == 'textarea'}
        <textarea class="input" name="{$name}" placeholder=" " {$attrs}>{$smarty.post[$name]}</textarea>
    {else}
        <input class="input" type="{$type|default:'text'}" name="{$name}" value='{$smarty.post[$name]}' placeholder=" " {$attrs}>
    {/if}
    
    <div class="field-label">{$label}</div>
</label>