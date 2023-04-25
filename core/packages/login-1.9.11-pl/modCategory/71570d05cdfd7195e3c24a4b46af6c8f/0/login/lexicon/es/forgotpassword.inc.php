<?php
/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modxcms.com> and Shaun McCormick
 * <shaun@modxcms.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * Forgot Password lexicon for Login
 *
 * @package login
 * @subpackage lexicon
 */
$_lang['login.email'] = 'Correo Electrónico';
$_lang['login.forgot_password'] = 'Olvidó su contraseña';
$_lang['login.forgot_password_email_subject'] = 'Recupere su contraseña';
$_lang['login.forgot_password_email_text'] = '<p> Hola [[+username]],</p>
<p>para activar su nueva contraseña, haga clic en el siguiente enlace:</p>
<p> <a href="[[+confirmUrl]]"> [[+confirmUrl]] </a> </p>
<p> Si tiene éxito, puede usar la siguiente contraseña para iniciar sesión:</p>
<p> <strong> Contraseña:</strong> [[+password]]</p>
<p> Si no ha pedido este mensaje, ignórelo. </p>
<p> Gracias,<br />
<em> [[++site_name]] Administración del sitio</em></p>';
$_lang['login.or_forgot_username'] = '¿O, olvidó su nombre de usuario?';
$_lang['login.reset_password'] = 'Restablecer contraseña';
$_lang['login.username'] = 'Nombre de usuario';
$_lang['login.user_err_nf_email'] = 'Si existe su nombre de usuario o correo electrónico, en breve recibirá un correo electrónico.';
$_lang['login.user_err_nf_username'] = 'Si existe su nombre de usuario o correo electrónico, en breve recibirá un correo electrónico.';
