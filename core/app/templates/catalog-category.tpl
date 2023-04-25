{extends 'base.tpl'}

{block 'main'}
    {$scss[] = 'templates/catalog-products' nocache}

    {$sidebar = true} 
    {if in_array('alias'|resource, ['ya-search', 'catalog-new', 'novinki', 'favorites'])}
        {$sidebar = false}
    {/if}

    <main class="pg-category | section">
        <div class="container">
            <div class="pg-category__columns {($sidebar) ? '_has-sidebar' : ''}">
                
                {if $sidebar}
                    <aside class="pg-category__sidebar">
                        {include 'parts/catalog-category-sidebar'}
                    </aside>
                {/if}

                <div class="pg-category__main">

                    {$categories = '@FILE query'|snippet:[
                        'select' => ['pagetitle', 'parent', 'uri'],
                        'where' => ['parent' => 'id'|resource, 'published' => 1, 'class_key' => 'msCategory']
                    ]}
                    {if $categories}
                        <ul class="pg-category__categories">
                            {foreach $categories as $item} 
                                <li><a class="button _gray" href="{$item.uri}">{$item.pagetitle}</a></li>
                            {/foreach}
                        </ul>
                    {/if}

                    {* сортировка *}
                    {if 'alias'|resource != 'ya-search'}
                        {nocache}
                            {$sort = $smarty.get.sort|default:''}
                            <form action="" class="pg-category__sort | js-catalog-filter">
                                <div class="pg-category__sort-toggle">
                                    <input id="sort-price-desc" name="sort" type="radio" value="price_desc" 
                                        {($sort === 'price_desc') ? 'checked' : ''}>
                                    <input id="sort-price" name="sort" type="radio" value="price"
                                        {($sort === 'price') ? 'checked' : ''}>
                                    <label for="sort-price">по цене{'/app/libs/bi/sort-down.svg'|svg}</label>
                                    <label for="sort-price-desc">по цене{'/app/libs/bi/sort-down-alt.svg'|svg}</label>
                                </div>
                                <div class="pg-category__sort-toggle">
                                    <input id="sort-abc-desc" name="sort" type="radio" value="pagetitle_desc"
                                        {($sort === 'pagetitle_desc') ? 'checked' : ''}>
                                    <input id="sort-abc" name="sort" type="radio" value="pagetitle"
                                        {($sort === 'pagetitle') ? 'checked' : ''}>
                                    <label for="sort-abc">по алфавиту{'/app/libs/bi/sort-alpha-down.svg'|svg}</label>
                                    <label for="sort-abc-desc">по алфавиту{'/app/libs/bi/sort-alpha-down-alt.svg'|svg}</label>
                                </div>
                            </form>
                        {/nocache}
                    {/if}

                    {* товары *}
                    <div class="pg-category__items prod-cards | grid | js-catalog-items" x-data="msReactive">
                        {if 'alias'|resource == 'ya-search'}
                            {nocache}
                                {$products = '@FILE ya_search'|snippet:[]}
                                {foreach $products.documents as $item}
                                    {include 'parts/prod-card'}
                                {foreachelse}
                                    <div>Ничего не найдено</div>
                                {/foreach}
                            {/nocache}
                        {else}
                            {ajax key='catalog'}
                                {$products = '@FILE ms_products'|snippet:['limit' => 12]}

                                {foreach $products.items as $item}
                                    {include 'parts/prod-card'}
                                {foreachelse}
                                    <div>Ничего не найдено</div>
                                {/foreach}

                                {if $products.pagination && $products.pages > 1}
                                    <div class="pagination | js-catalog-pagination">
                                        {if $products.page != $products.pages}
                                            <button class="pagination-more-btn button _minwidth" data-page-next="{$products.page + 1}">
                                                <span>Показать ещё</span>
                                            </button>
                                        {/if}
                                        {$products.pagination}
                                    </div>
                                {/if}
                            {/ajax}
                        {/if}
                    </div>
                </div>

            </div>
        </div>
    </main>
{/block}

{block 'blocks'}
    {if 'content'|resource}
        {include 'parts/section.tpl' block=[
            'content' => 'content'|resource,
            'show_title' => 1,
            'title' => 'Описание'
        ]}
    {/if}
{/block}