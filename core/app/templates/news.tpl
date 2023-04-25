{extends 'base.tpl'}

{block 'main'}
    {$scss[] = 'templates/news' nocache}

	{$items = 'pdoPage'|snippet:[
		'depth' => 0,
        'limit' => 12,
        'pageLimit' => 7,
		'sortby' => '{ "publishedon": "DESC" }',
		'includeTVs' => 'image',
		'tvPrefix' => '',
        'setMeta' => 0,
		'return' => 'JSON',

        'tplPage'=>'@INLINE <li><a class="" href="{$href}" data-page="{$pageNo}">{$pageNo}</a></li>',
        'tplPageActive'=>'@INLINE <li class="pagination-list-active">{$pageNo}</li>',
        'tplPageSkip' => '@INLINE <li class="pagination-list-skip">...</li>',
        'tplPageWrapper'=>'@INLINE <ul class="pagination-list">{$pages}</ul>'
	] nocache}

	<main class="pg-news | section container">
		<div class="pg-news__items | grid">
            {foreach json_decode($items, true) as $item}
                {include 'parts/news-card.tpl'}

                {if 'pageCount'|ph > 1}
                    <div class="pagination">{'page.nav'|ph}</div>
                {/if}
            {/foreach}
		</div>
	</main>
{/block}