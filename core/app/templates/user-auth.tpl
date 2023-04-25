{extends 'base.tpl'}

{$no_title = true}

{block 'main'}{nocache}
    <main class="section container">
        {if !$smarty.get.lp}
            <form class="form _box _maw | js-form" action="" hx-post="ajax/{$section}">
                {ajax key=$section}
                {$site_name = 'site_name'|config}

                {if $ajax_key == 'login'}
                    <h1 class="form__title h2">Вход</h1>
                    {$login = '@FILE login'|snippet:[] nocache}
                    {include 'components/form-field' name='username' label='Email' type='email' attrs='required'}
                    {include 'components/form-field-password' attrs='required'}
                    <div>
                        <a href="/auth/forgot"><span>Забыли пароль?</span></a>
                    </div>
                    {if $login.error}
                        <div class="message is-danger">{$login.error}</div>
                    {/if}
                    <div class="form__footer columns">
                        <button class="button _fullwidth" type="submit">Войти</button>
                        <a class="button _fullwidth _gray" href="/auth/register">Зарегистрироваться</a>
                    </div>
                {/if}

                {if $ajax_key == 'forgot'}
                    <h1 class="form__title h2">Забыли пароль?</h1>
                    {'ForgotPassword'|snippet:[
                        'emailSubject' => "Сброс пароля на сайте «$site_name»",
                        'sentTplType' => 'embedded',
                        'tplType' => 'embedded',
                        'loginResourceId' => 236,
                        'resetResourceId' => 236
                    ] nocache}
                    {if 'loginfp.post.id'|ph}
                        <div class="message is-success">
                            Новый пароль и ссылка для его активации высланы на email <b>{$email}</b>.<br>
                            Если вы не получили письмо, проверьте папку «спам».
                        </div>
                    {else}
                        {if 'loginfp.errors'|ph}
                            <div class="message is-danger">Пользователь с таким email не найден</div>
                        {/if}
                        <input type="hidden" name="service" value="forgotten">
                        <input type="hidden" name="login_fp" value="1">
                        <input type="hidden" name="login_fp_service" value="forgotpassword">
                        {include 'components/form-field' name='email' label='Email' type='email' attrs='required'}
                        <div class="form__footer columns">
                            <button class="button _fullwidth" type="submit">Сбросить пароль</button>
                            <a class="button _fullwidth _gray" href="/auth">Войти</a>
                        </div>
                    {/if}
                {/if}

                {if $ajax_key == 'register'}
                    <h1 class="form__title h2">Регистрация</h1>
                    {'Register'|snippet:[
                        'activationEmailFrom' => 1|field:'emailsender',
                        'activationEmailFromName' => $site_name,
                        'activationEmailSubject' => "Подтвердите учётную запись на сайте «$site_name»",
                        'activationEmailTplType' => 'file',
                        'activationEmailTpl' => '{core_path}elements/templates/components/login-register-email.tpl',
                        'activationResourceId' => 236,
                        'submitVar' => 'register',
                        'successMsg' => '1',
                        'usergroups' => '4',
                        'usernameField' => 'email',
                        'validate' => '
                            password:required:minLength=^6^,
                            password_confirm:password_confirm=^password^,
                            email:required:email',
                        'placeholderPrefix' => 'fi.'
                    ] nocache}
                    {*
                        'postHooks' => 'email',
                        'emailTpl' => 'fi-email.tpl',
                        'emailSubject' => 'На сайте «$site_name» зарегистрирован новый пользователь',
                        'emailTo' => 1|field:'mail_to',
                        'emailFrom' => 1|field:'emailsender',
                        'emailFromName' => $site_name,
                        'emailReplyTo' => $smarty.post.email,
                        'emailReplyToName' => $smarty.post.fullname
                    *}

                    {if 'error.message'|ph}
                        <div class="message is-success">
                            Спасибо за регистрацию на сайте!<br>
                            Пожалуйста, подтвердите email, указанный при регистрации.
                            Для этого проверьте электронную почту.<br>
                            Если вам не пришло письмо, проверьте папку «спам».
                        </div>
                    {else}
                        <input type="hidden" name="register" value="1">
                        {include 'components/form-field' name='email' label='Email' type='email' attrs='required'}
                        {include 'components/form-field' name='fullname' label='Имя'}
                        {include 'components/form-field' name='phone' label='Телефон' type='tel'}
                        {include 'components/form-field-password' attrs='required'}
                        {include 'components/form-field-password' name='password_confirm' label='Повторите пароль' attrs='required'}
                        <div class="form__footer columns">
                            <button class="button _fullwidth" type="submit">Зарегистрироваться</button>
                            <a class="button _fullwidth _gray" href="/auth">Войти</a>
                        </div>
                    {/if}
                {/if}

                {/ajax}
            </form>
        {else}
            <div class="form-box">
                {if $smarty.get.action == 'activation'}
                    <h1 class="form-box-title h2">Подтверждение регистрации</h1>
                    {'ConfirmRegister'|snippet:[
                                                                        'redirectTo' => 236,
                                                                        'redirectParams' => '{ "confirm": "1" }'
                    ] nocache}
                {else}
                    <h1 class="form-box-title h2">Сброс пароля</h1>
                    {'ResetPassword'|snippet:[
                                                                        'expiredTpl' => 'login-forgot-expired.tpl',
                                                                        'tpl' => '
                            <div class="message is-success">Ваш пароль был сброшен</div>
                            <div class="form-box-footer">
                                <a class="button _fullwidth" href="/auth">Войти</a>
                            </div>
                        ',
                                                                        'tplType' => 'inline'
                                                                    ] nocache}
                {/if}
            </div>
        {/if}
    </main>
{/nocache}{/block}