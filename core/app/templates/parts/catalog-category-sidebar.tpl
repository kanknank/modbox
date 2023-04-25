<div class="filter">
    <button class="filter__expand | button _outlined _fullwidth | js-catalog-filter-expand">Фильтры</button>
    
    <form class="filter__form | js-catalog-filter">
        {nocache}

            {$data = '@FILE ms_filter'|snippet:['category' => 13]}

            {* <div class="filter__header">
                <div class="filter__header-title">Фильтры</div>
                
            </div> *}
            
            {foreach $data as $key => $item}
                <section class="filter__section">
                    <h3 class="filter__section-title h6">{$item.label}</h3>

                    {if $item.type == 'select'}
                        <div class="filter__checkboxes | vstack">
                            {foreach $item.values as $val}
                                {$checked = (in_array($val, explode(',', $smarty.get["filter_{$key}"]))) ? 'checked' : ''}
                                <label class="checkbox">
                                    <input name="filter_{$key}[]" value="{$val}" type="checkbox" {$checked}>
                                    <span class="checkbox-check"></span>
                                    <span>{$val}</span>
                                </label>
                            {/foreach}
                        </div>
                    {/if}
                    
                    {if $item.type == 'range'}
                        <div class="filter__ranger">
                            <div class="filter__ranger-inputs">
                                <label>
                                    <input type="number" class="input"
                                        placeholder="{$item.min}"
                                        name="min_{$key}"
                                        min="{$item.min}" max="{$item.max}"
                                        value='{$smarty.get["min_{$key}"]}'
                                    >
                                </label>
                                <span>—</span>
                                <label>
                                    <input type="number" class="input"
                                        placeholder="{$item.max}"
                                        name="max_{$key}"
                                        min="{$item.min}" max="{$item.max}"
                                        value='{$smarty.get["max_{$key}"]}'
                                    >
                                </label>
                            </div>
                            <div class="js-catalog-filter-slider"></div>
                        </div>
                    {/if}
                </section>
                
                {* {if $key == 'price'}
                    {$radios = [
                        'Все' => '',
                        'Новинки в каталоге' => 'new',
                        'Товары по акции ' => 'favorite'
                    ]}
                    <section class="filter__section">
                        <h3 class="filter__section-title h6">Статус товара</h3>
                        <div class="filter__checkboxes | vstack">
                            {foreach $radios as $label => $val}
                                {$checked = (in_array($val, explode(',', $smarty.get["filter_action"]))) ? 'checked' : ''}
                                <label class="radio">
                                    <input name="filter_action" value="{$val}" type="radio" {$checked}>
                                    <span class="radio-check"></span>
                                    <span>{$label}</span>
                                </label>
                            {/foreach}
                        </div>
                    </section>
                {/if} *}
            {/foreach}

            <div class="filter__section">
                <button class="button _gray" type="reset">Очистить</button>
            </div>
        {/nocache}
    </form>
</div>