Changelog for Login
===================

Login 1.9.11
------------------------------------
- Fix ensurePasswordStrength [#181]
- Fix loginViaEmail for MODX 3 [#179]

Login 1.9.10
------------------------------------
- Log error if mail was not sent [#174]
- Switched translation to Weblate and removed not translated/less translated lexicon

Login 1.9.9
------------------------------------
- Fix validate email addresses in Register [#143]

Login 1.9.8
------------------------------------
- Allow persistParams when redirectUnsetDefaultParams is true [#157]
- Parse file based chunks [#167]
- Prevent directory traversal in the username when register a new user
- Fix logging 'Could not load package metadata for package login.' during install
- Update Translations

Login 1.9.7
------------------------------------
- Generate the password directly with modx->user->generatePassword()
- Make it possible to set the usergroup rank when register a new user [#135]
- Set an action in the default password reset form [#134]
- Update Translations

Login 1.9.6
------------------------------------
- Register snippet PII improvements [#130]
- JSON responses for the Login controller/snippet [#121]
- Use Crowdin for translations: https://crowdin.com/project/modx-login
- Update Translations [#132]
- Use $modx->user->generatePassword for generating passwords [#131]
- Escape MODX tags after htmlspecialchars because of the ampersand sign

Login 1.9.5
------------------------------------
- Fix ResetPassword passing null instead of an array to getChunk
- Remove hash_class, salt and sessionid from placeholders
- Prevent potential XSS in placeholders
- Added two missing default template chunks
- Fixing a charset issue in some language files
- Fixing email validation [#110]
- Disable User/E-mail Enumeration in ForgotPassword snippet by an empty sentTpl property (default)
- New jsonResponse property for returning a JSON by the Register snippet (for an AJAX call response)
- Possibility to reset the registration fields after successful registration

Login 1.9.4
------------------------------------
- Disable User/E-mail Enumeration
- Enable login via email
- Convert deprecated ereg functions to preg_* [#86]
- Fixing error placeholders with empty placeholderPrefix
- Fixing recoverable error, Argument 2 to getChunk() must be of the type array, null given [#87]

Login 1.9.3
------------------------------------
- Added activePage property to ConfirmRegister controller
- Added danish language files
- Normalize placeholder prefix usage
- Improved PHP7 compatibility
- Added loggedinResourceId and loggedoutResourceId to the Login controller
- Fix errors with square brackets in changed password
- Add confirm password and password length validation messages to the field error placeholders too
- Fill lu/lp placeholders in the change password form
- Added hidden lu/lp fields to the lgnResetPassChangePassTpl chunk
- Fix for array fields in Register/Profile/UpdateProfile snippet

Login 1.9.2
------------------------------------
- Fix sending register activation email
- Fix ConfirmRegister processor

Login 1.9.1
------------------------------------
- [[!+error.message]] returns detailed error
- [#42] Fixed URL encoding/decoding
- Sanitise Login placeholders
- Fixed namespace paths

Login 1.9.0
------------------------------------
- Expired/used password reset link notification
- Added autoLogin and forceChangePassword to ResetPassword snippet
- Added autoLogin param to Register snippet
- Improved password reset functionality
- Update form fields with new values when reloadOnSuccess=0
- Replace parseChunk with getChunk
- Added Arabic lexicons
- Fixed invalid properties in logindictionary and updateprofile
- Added czech lexicons

Login 1.8.1
------------------------------------
- Add password strength algorithm and checking properties to Register, via &ensurePasswordStrength property

Login 1.8.0
------------------------------------
- [#5946] Add ability to set User Group for a new user via the &usergroupsField property
- [#7520] Fix bug with ConfirmRegister logging the user in as anonymous

Login 1.7.3
------------------------------------
- [#7035] Fix regression error with email field in Register snippet

Login 1.7.2
------------------------------------
- [#6194] Fix issue with UpdateProfile when specifying the non-active user to update
- [#6538] Add removeExpiredRegistrations property to Register snippet for handling expired, unactivated registrations
- [#6256] Ensure Register respects passwordField and emailField properties
- [#6288] Fix error message display in ChangePassword

Login 1.7.1
------------------------------------
- [#5947] Fix issue with Profile with unauthenticated users
- [#5979] Fix issue with ConfirmRegister and non-FURL sites
- [#5734] Add &allowedFields to Register to allow restricting of submitted fields to a specific set
- [#6010] Fix typo in UpdateProfile mismatching ID of profile to internalKey
- [#5961] Add &trimPassword to automatically trim whitespace from submitted passwords
- Add &generatePassword to automatically generate a password instead of having to provide one manually
- [#6146] Add &validatePassword to Register to allow for manual password generation
- [#5969] Add &user property to UpdateProfile to allow specifying user to update

Login 1.7.0
------------------------------------
- [#49] Update reCaptcha URLs
- [#5793] Add errTpl and errTplType properties to ForgotPassword
- [#5823] Fix issue where postHooks did not have fields available
- [#5797] Fix issue where &authenticate was not respected in ConfirmRegister snippet
- [#5796] Fix issue where errors could appear twice if user used validators on username/email/password fields
- Add ActiveUsers snippet that shows a list of active, logged-in users
- Add file-based hooks to Login hook calls
- Complete OOP refactoring to provide more stable development and better code isolation
- Add unit test framework and over 30 tests
- Add alternative plaintext email option for ability to send both html and plaintext in emails
- [#5166] Add additional sanity decoding to ConfirmRegister processing

Login 1.6.5
------------------------------------
- [#5176] Fix issue with Registration in Revo 2.0 installations
- Fix issue with some error messages not being wrapped with errTpl
- Email validator now only checks for email validation, not required status
- [#5166] Add additional sanity decoding to ConfirmRegister processing

Login 1.6.4
------------------------------------
- [#3588] Add &allowedFields and &allowedExtendedFields to UpdateProfile to restrict fields that are updated
- [#4744] Add &redirectToOnFailedAuth parameter for redirecting to a separate page on failed logins
- [#3263] Remove duplicate error spans in validator output

Login 1.6.3
------------------------------------
- Better support for checkboxes/radios/bracketed fields in login validator
- [#5088] Fix issue with ChangePassword &validateOldPassword and Revo 2.1.1

Login 1.6.2
------------------------------------
- [#4844] Automatically trim trailing whitespace/newlines in validator calls
- [#4843] Fix issue with sentTplType not being respected in ForgotPassword
- [#4936] Fix issue in ForgotPassword that occurred if no user was found with that username
- [#5019] Add backwards compatibility for Revo 2.0.x users in ResetPassword
- Fix reference to $this->modx->lexicon in Login Snippet

Login 1.6.0/1
------------------------------------
- [#4886] Fix issue with variable variable in main login class when loading hooks
- [#4487] Prevent usage of mb_ereg if not installed
- [#3500] Fix issues with inline tplType params in Login snippets
- [#4545] Fix issue with OnBeforeUserActivate event
- Revolution 2.1 support, specifically with the password changes

Login 1.5.3
------------------------------------
- Add preHooks to ForgotPassword snippet
- Fix issue that occurs when Login and Register forms are on same page with math register hook

Login 1.5.2
------------------------------------
- [#3330] Add sanity checks to prevent possible submitVar data adding in UpdateProfile
- Add support for moderation of users when done in a prehook
- Add support for redirectBackParams that can send encoded data through a login/registration process
- Add a generic validation error in Register to allow for general messages
- Ensure preHooks run before password validation in ChangePassword snippet
- Fix issue with placeholderPrefix in UpdateProfile snippet

Login 1.5.1
------------------------------------
- [#44] Fix bug with login validator, &validate parameter
- [#40] Fix issue with syncUsername in UpdateProfile
- [#42] Respect allow_multiple_emails setting that prevents users with same email addresses
- [#43] Add workaround for xPDO bug with NULL fields in modUserProfile
- Trim each hook specification in hooks calls
- [#28] Fixed validator issue in UpdateProfile
- Added redirectTo and redirectParams on ForgotPassword snippet
- Updated events in ResetPassword snippet to pass user object
- Fixed UpdateProfile to properly update user obj so derivative User classes can manage profile updates

Login 1.5.0
------------------------------------
- Fixed security vulnerability
- Added authenticate and authenticateContexts to ConfirmRegister to allow for authentication after confirming registration
- Fixed persisting request alias params issue in ConfirmRegister
- [#15] Added ability to assign roles when using &usergroups in Register, ie: &usergroups=`my-group-name:Member`
- Added math hook to Register, allowing anti-spam math field measure
- Added fix to allow overriding of class_key for new users in Register

Login 1.4.0
------------------------------------
- Added redirectBack to Register, Login and ConfirmRegister that allows dynamic redirection handling for other forms needing login/registration
- Added redirectTo, redirectParams to ConfirmRegister that will redirect after successful confirmation
- Added persistParams to Register snippet, useful for shopping cart implementations to persist parameters across the registration process
- [#27] Fixed issue with activationEmail always overriding normal email
- [#29] Added loginResourceParams, logoutResourceParams, which allows attaching REQUEST parameters to login/logout redirection URLs
- Added changelog to build
- [#26],[#14] Added activationEmail property for better handling of middle men in activation steps

Login 1.3.2-pl
------------------------------------
- [#25] Added isLoggedIn snippet for checking auth status
- [#24] Fixed issue where inactive user could re-register
- Fixed issue with embedded chunk type display
- Fixed issue with redirects and non-FURLs on Register snippet

Login 1.3.1-pl (October 15, 2010)
------------------------------------
- Fixed issue with Login snippet on invalid logins

Login 1.3.0-pl (October 14, 2010)
------------------------------------
- Modified experimental multi-context support to use new login processor add_contexts parameter
- Added ChangePassword snippet for changing passwords in the front-end
- Fixed bugs with usernameField property, now works as expected
- Added Dutch translation

Login 1.2.0
------------------------------------
- Fixed issues with placement of prehooks and such
- Added excludeExtended property to Register, UpdateProfile snippets to allow for excluding fields from extended fields
- Added new hook API methods for easier setting/retrieving of fields
- Added experimental multiple-context login support
- Fixed bug in login snippet with hard-coded action keys
- Added support to set subject in ForgotPassword email
- Added reCaptcha support to login form via a preHook
- Added preHooks and postHooks ability to Login snippet
- i18n of snippet properties

Login 1.1.0
------------------------------------
- Added Profile snippet, which outputs Profile data of a User in placeholders
- Added &useExtended to UpdateProfile/Register, which allows users to set additional fields passed to be set in extended column
- Fixed bug in UpdateProfile where validators were broken

Login 1.0.3
------------------------------------
- Fixed bug where logout link generation was ignorant of xhtml_urls setting
- Fixed bug where ForgotPassword was sending invalid confirmUrl
- Added preHooks and postHooks properties for doing pre and post register scripting to UpdateProfile snippet
- Added preHooks and postHooks properties for doing pre and post register scripting to Register snippet
- Added syncUsername property to UpdateProfile snippet
- Fixed bug with embedded output in Login snippet
- Added Russian translation

Login 1.0.2
------------------------------------
- Updated copyright information
- Ensure username,password and email are always passed to register snippet to prevent blank logins

Login 1.0.1
------------------------------------
- Consolidated elements into own dir
- Added extra checks and fixes to lgnValidator class
- Added UpdateProfile snippet to enable updating of profile from front-end

Login 1.0.0
------------------------------------
- [#ADDON-129] Added name to default Register form
- [#ADDON-106] Fixed incorrect plugin event invoking
- [#ADDON-107] Added missing lexicon entry register.password_confirm
- [#ADDON-103] Fixed context-specific issue with register email
- [#ADDON-118] Force lexicon topic to load on lgnRegisterForm
- Fixed alias issue in ForgotPassword snippet
- Added changelog.txt
