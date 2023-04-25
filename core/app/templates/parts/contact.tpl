{if $type == 'addr'}
    <div class="contact">
        {if $icon}{'/app/icons/storefront.svg'|svg}{/if}
        <span>{3|field:'contacts_address'}</span>
    </div>
{/if}

{if $type == 'time'}
    <div class="contact">
        <span>{3|field:'contacts_time'}</span>
    </div>
{/if}

{if $type == 'email'}
    {$email = 3|field:'contacts_email'}
    <a class="contact {$class}" href="mailto:{$email}">
        {if $icon}{'/app/icons/mail.svg'|svg}{/if}
        <span>{$email}</span>
    </a>
{/if}

{if $type == 'phone'}
    {$phone = 3|field:'contacts_phone'}
    <a class="contact {$class}" href="tel:{$phone|regex_replace:'/[ \(\)\-]/':''}">
        {if $icon}{'/app/icons/phone.svg'|svg}{/if}
        <span>{$phone}</span>
    </a>
{/if}

{if $type == 'soc'}
    <div class="social">
        <div class="social__items">
            {foreach json_decode(3|field:'contacts_soc', true) as $item}
                {if $item.on}
                    <a class="" href="{$item.link}" target="_blank" rel="nofollow noopener">
                        {$item.icon|src|svg}
                    </a>
                {/if}
            {/foreach}
        </div>
    </div>
{/if}
