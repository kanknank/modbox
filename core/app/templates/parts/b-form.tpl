{*{
    "name": "Форма"
}*}

{extends 'parts/b-base.tpl'}

{block 'section-main'}
    <div class="columns">
        <form action="" class="b-form__form | form" hx-post="ajax/form-main">
            {ajax key='form-main'}
            {$form = '@FILE form'|snippet:[
                                'form_title' => 'Форма связи',
                                'form_ya_target' => 'write'
                            ]}
            {if $form.success}
                {$form.successMessage}
            {else}
                {include 'components/form-field' name='fullname' label='Ваше имя' attrs='required'}
                {include 'components/form-field' name='email' label='Ваш email' type='email' attrs='required'}
                {include 'components/form-field' name='phone' label='Ваш телефон' type='tel'}
                {include 'components/form-field' name='message' label='Сообщение' type='textarea' attrs='required'}
                {$form.validation_error_message}
                <div>
                    <button class="button is-fullwidth" type="submit">Отправить</button>
                </div>
                <div class='form-privacy'>Отправляя форму, вы соглашаетесь с <a href='/privacy-policy' target='_blank'>Политикой
                        по защите персональных данных</a></div>
            {/if}
            {/ajax}
        </form>

        {* <div class="b-form__image">
            <img src="{$block.image|src|phpthumbon:'w=300'}" alt="">
        </div> *}
    </div>
{/block}