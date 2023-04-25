{extends 'base.tpl'}

{block 'main'}{nocache}
	<main class="profile | section container columns">

        <ul class="sidebar-menu">
            <li class="{if $section == 'orders'}is-active{/if}"><a class="" href="/profile/orders">Мои заказы</a></li>
            <li class="{if $section == 'update'}is-active{/if}"><a class="" href="/profile/update">Настройки профиля</a></li>
            <li class="{if $section == 'password'}is-active{/if}"><a class="" href="/profile/password">Изменить пароль</a></li>
            <li><a class="" href="/auth/logout">Выход</a></li>
        </ul>

        <div>
            {if $smarty.get.confirm}
                <div class="message is-success" style="margin-bottom: 1.5rem">Ваша учётная запись успешно подтверждена!</div>
            {/if}

            {if $section == 'orders'}
                <ul class="profile-orders">
                    {$orders = '@FILE ms_orders'|snippet nocache}
                    {*$orders|print*}
                    {foreach $orders as $item}
                        <li class="profile-orders-item">
                            <div class="columns">
                                <div class="profile-orders-item-main">
                                    <div><b>Заказ № {$item.num}</b>, {$item.createdon|fuzzyDate}</div>
                                    <div>Статус: <span style="color: #{$item.status_color}">{$item.status_name}</span></div>
                                    {if $item.updatedon}
                                        <div>Изменён: {$item.updatedon|fuzzyDate}</div>
                                    {/if}
                                    <div>Сумма заказа: {$item.cost} ₽</div>
                                    <div>
                                        <a href="api/ms/cart/repeat/{$item.id}" class="button">Повторить заказ</a>
                                    </div>
                                </div>
                                <ul class="profile-orders-item-products | color-text-muted">
                                    {foreach $item.products as $i}
                                        <li>
                                            <a class="link" href="{$i.uri}">{$i.name}</a>
                                            {$i.price} ₽ / шт.
                                            × {$i.count}
                                            = {$i.cost} ₽
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </li>
                    {foreachelse}
                        <li class="message">Ваш список заказов пока пуст</li>
                    {/foreach}
                </ul>
            {/if}

            {if $section == 'update'}
                <form class="form _box | js-form" hx-post="ajax/user_update">
                    {ajax key='user_update'}
                        {literal}
                            <h2 class="form__title h4">Настройки профиля</h2>
                            {'UpdateProfile'|snippet:[
                                'submitVar' => $ajax_key,
                                'reloadOnSuccess' => false,
                                'validate' => 'email:email:required',
                                'syncUsername' => 'email'
                            ] nocache}

                            {function field field='' label='' type='text' attrs=''}
                                <label class="field">
                                    <div class="field-error">{"error.{$field}"|ph}</div>
                                    <input class="input" type="{$type}" name="{$field}" value="{$field|ph}" placeholder=" " {$attrs}>
                                    <div class="field-label">{$label}</div>
                                </label>
                            {/function}
                            
                            <input type="hidden" name="{$ajax_key}" value="1">
                            {field field='email' label='Логин (email)' type='email' attrs='readonly'}
                            {field field='fullname' label='Ф.И.О.' attrs='required'}
                            {field field='phone' label='Телефон' type='tel' attrs='required'}
                            
                            <div class="form__footer">
                                <button class="button _fullwidth" type="submit">Сохранить</button>
                            </div>

                            {if "login.update_success"|ph}
                                <div class="message is-success">Изменения сохранены</div>
                            {/if}
                        {/literal}
                    {/ajax}
                </form>
            {/if}

            {if $section == 'password'}
                <form class="form _box | js-form" hx-post="ajax/password">
                    {ajax key='password'}
                        <h2 class="form__title h4">Изменить пароль</h2>
                        {'ChangePassword'|snippet:[
                            'submitVar' => $ajax_key,
                            'reloadOnSuccess' => false,
                            'clearFieldsOnSuccess' => 1,
                            'placeholderPrefix' => 'fi.'
                        ] nocache}

                        <input type="hidden" name="{$ajax_key}" value="1">
                        {include 'components/form-field-password' name='password_old' label='Старый пароль' attrs='required'}
                        {include 'components/form-field-password' name='password_new' label='Новый пароль' attrs='required'}
                        {include 'components/form-field-password' name='password_new_confirm' label='Подтвердите новый пароль' attrs='required'}

                        <div class="form__footer">
                            <button class="button _fullwidth" type="submit">Сохранить</button>
                        </div>

                        {if "fi.successMessage"|ph}
                            <div class="message is-success">Пароль изменён</div>
                        {/if}
                    {/ajax}
                </form>
            {/if}
        </div>
	</main>
{/nocache}{/block}