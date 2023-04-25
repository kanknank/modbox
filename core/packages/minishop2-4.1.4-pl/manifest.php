<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => '# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [4.1.4-pl] - 2022-03-31

### Added
 - New lexicons
 - Ability to attach TV fields to products inside an order letter
 - Ability to regenerate images from the product grid
 - Eslint JS Code Validator

 ### Changed
 - The regular expression for validating a phone number in an order has been moved to the system setting
 - All JS code in the new set of scripts is formatted according to eslint rules
 - Minishop2 Config renamed to config in main class of new JS bundle

 ### Fixed
 -  A bug with missing default value for msOrderAddress.order_id
 -  A bug with dragging goods in the grid

## [4.1.3-pl] - 2022-03-14

### Changed
- Fixed error with return data in snippet msGallery


## [4.1.2-pl] - 2022-02-03

### Changed
- Fixed incorrect preventDefault in vanilla js script

## [4.1.1-pl] - 2022-02-02

### Changed
- Update JS classes names in system settings
- Rename new JS method sendResponse to sendRequest

## [4.1.0-pl] - 2022-31-01

### Added
- New type of options - color selection
- Queue manager support
- Working with lexicons through the crowdln service, similar to MODX
- Additional data returned by the cart when it is changed
- New modes for returning data from msGallery
- System setting ms2_status_canceled


### Changed
- Fixed a bug with simultaneous operation of the basket with different contexts
- Added saving the description field to the gallery/upload processor
- Improved sorting and selection of uploaded files to save the first image to the msProductData table
- Updated the text and values of the setting_ms2_order_product_options system setting
- Fixed a bug with redirection after placing an order in new js
- Many minor syntax and code readability improvements

### Removed
- Setting for button icons in mgr category
- Phone length limitation during validation in the order

## [4.0.0-pl] - 2022-12-18

### Added
- Displaying custom parameters in msProducts.tpl #742
- Patch for error when installing and creating the ms2_options table  #747
- Patch for error with non-existent fields in the tables #749
- Creating a vendor when creating a product #748

## [4.0.0-beta] - 2022-09-16

### Added
- A new set of JS scripts
- Creating an order from the manager
- Ability to assign order statuses for various events (new order, payment, creating draft)

### Changed
- Relationship between msOrder and msOrderAddress
- Interfaces for controllers are moved to a separate file

### Removed
- Plugin fotorama
- Depricated controllers

## [3.0.7-pl] - 2022-09-06

### Added
- MODX and PHP version check before installation
- Snippet options are now available in wrapper chunks
- The ability to search for an order in the admin panel by phone number
- Email field to order address window

### Changed

- Css styles reserved for global layout classes (header, footer, title, count, weight, price, image) in msCart and msGetOrder chunks.

## [3.0.6-pl] - 2022-06-29

### Changed
Improved readability of the code without changing the logic
Fixed potential unknown variable error in  Order.submit method

### Removed
- PayPal payment module

## [3.0.5-pl] - 2022-06-16

### Changed
Fixed bug of linking order and address models
Fixed conflict of identical fields #696

## [3.0.4-pl] - 2022-06-09

### Added
Removal of empty directories of images #685

### Changed
Fix escaping rank field for msProductFile #690
Fix first thumbnail generator #691
load minishop2:default lexicon in registerFrontend #688

## [3.0.3-pl] - 2022-05-30

### Changed
- Fixed error with escaping of the rank on object msOrderStatus
- Added escaping of the rank in upload processor
- Returned the ability to add any fields to the order object

## [3.0.2-pl] - 2022-05-20

### Added
- The ability to update image previews in the product grid
- The ability to specify the role number when registering a user
- Lost system setting ms2_cart_max_count

### Changed
- msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler deprecated file notifications now listen to the log_deprecated system setting
- Escaping of the rank field to support mysql 8

## [3.0.1-pl] - 2022-05-04

### Changed
- Old controllers msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler are marked as deprecated with usage error logged
- The configuration required for JS controllers no longer depends on the included js files and is always available
- DB storage controllers got additional checks
- Update Copyrights

## [3.0.0-pl] - 2022-04-27

### Added
- New catalog handlers to store the main controllers: msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler
- System settings: ms2_tmp_storage, ms2_register_frontend
- Database fields ms2_orders.session_id, ms2_order_addresses.email ms2_order_products.properties
- New controllers for db storage, session storage
- New order status Processed
- Method RegisterFrontend

### Changed

- Composite msOrder.Address change owner from foreign to local
- Clear controllers msCartHandler, msOrderHandler, msDeliveryHandler, msPaymentHandler.  Content replaced by stub
- Resolver table.  New mechanism for managing database tables and fields
- Field\'s type  ms2_order_statuses.rank  changed from tinyint to int
- Plugin minishop2.  Added Method RegisterFrontend to section OnLoadWebDocument

### Removed
- Resolver Upgrade

## [2.9.3-pl] - 2021-10-16

### Added

- Added a class for the form of cleaning the trash [#630]

### Changed

- Fixed bug with adding text_address field [#628]

## [2.9.2-pl] - 2021-09-28

### Added

- Added the ability to set / remove product previews [#617]

### Changed

- Removed duplicate code [#619]
- Removed a broken check for resource changes [#618]
- Fixed correct http code 403 in case of unauthorized access to the file [#622]
- Default msProduct class when added to cart [#613]
- Improved overall code readability [#620]
-- Optimized dirname method when connecting files
-- Optimized definition of constants
-- Added PHPDOC
-- Removed commented code and some empty blocks
-- Added access specifier to methods

## [2.9.1-pl] - 2021-09-12

### Added

- Added msVendor fields in the list of order items [#612]
- Added frequently used fields to the address table [#581]

### Changed

- Bug fixed This image is already in the product gallery

## [2.9.0-pl] - 2021-08-25

### Added

- Added wiretapping of initiated context for work from API [#578]
- Added counting of the number of items in the cart [#579]
- Replace ssl certificate for PayPal [#573]
- Added delivery_cost parameter for msOnGetOrderCost event [#585]
- Added the ability to set week start in orders [#570]
- Added support for zero cost

### Changed

- Fixed the logic of registration of the order status label in the order history [#576], [#580]
- Bringing the code to the PSR12 standard [#574]
- Refactoring PSR-12 errors [#577]
- Added a name field for micro-markup [#588]
- Fixed error Cannot read property \'Search\' of undefined [#591]
- getCost method optimized [#602]
- Fixed error create ms2_options table

## [2.8.3-pl] - 2021-04-01

### Changed

- Regular expression update to validate phone number [#563]
- Legacy php backward support [#564]

### Removed

- Removed object references as legacy code. [#566]

## [2.8.2-pl] - 2021-03-15

### Added

- Added support for OR, AND operators in the optionFilters parameter in the msProducts snippet [#539]
- The concept of refactoring the connection of notification scripts [#542]
- Added "Save and close" button on links window [#533]
- Added support for the return parameter in msProducts [#553]

### Changed

- Fix Recoverable error: Object of class msProductData_mysql could not be converted to string [#555]
- Change variables in fenom chunk [#557]
- New keep a changelog format
- Fixed display of product option value on product category page [#547]
- Remove unnecessary type="text/javascript"

### Removed

- Removed unused library `jquery.form` [#544]
- Removed unused old.css file [#552]
- Removed deprecated backward compatibility method with ms1 [#537]
- Remove duplicate css [#558]

## [2.8.1-pl] - 2021-02-14

### Changed

- Fixed Recoverable error: Object of class msProductData_mysql could not be converted to string [PR #532]

## [2.8.0-pl] - 2021-01-27

### Added

- Improvement. Dividing the order amount by the purchase and delivery [PR #507]

### Changed

- Checking if the field free_delivery_amount is present [PR #520]
- Set checkbox value [PR #513]
- Minor English vernacular improvements [PR #512] [PR #511]
- Fixed. Correction of displaying a product category if it is not a container [PR #509]
- Fixed PHP warning: count() error [PR #508]
- Fixing the Notice: Undefined offset error when importing a picture with a Russian name through the \'gallery/upload\' processor [PR #504]
- Converting code to cross-browser ECMAScript 5.1 standard [PR #503]
- Fixed display of settings tabs and resource groups when editing a Category [PR #501]
- Fixed logic for free delivery calculation [PR #498]

### Removed

- Removing the console script for converting from ms1 to ms2 [PR #506]

## [2.7.0-pl - 2020-12-09

### Added

- Improvement. Discount calculation added to the status method in the cart class [PR #497]
- Improvement. Added order product\'s options interface [PR #491]
- Improvement. Added amount for free shipping [PR #490]
- Improvement. Changing any product fields by event msOnGetProductFields [PR #417]
- Improvement. Added an example of displaying product content on Fenom [PR #478]
- Improvement. `ignoreGroups` and `sortGroups` to `msProductOptions` snippet [PR #483]
- Improvement. Added `return` property to `msProductOptions` snippet [PR #484]
- Improvement. Added transparency to disabled grid lines [PR #485]

### Changed

- Fixed problem with "Cannot read property items of undefined" and corrected the order of tabs when creating an item [PR #486]
- Fixed PHP warning: count() [PR #482]
- Fixed baseUrl in media source [PR #489]
- Fixed visual bug [PR #480]

## [2.6.0-pl] - 2020-11-12

### Added

- Added micro-markup [PR #471]
- Added ms2_frontend_country lexicon [PR #470]
- Added displaying of the alt attribute and title in the gallery chunk [PR #469, #472]
- Added display of the gallery tab when creating a product [PR #455]
- Added sortOptions property for snippet msProductOptions [PR #447]
- Added multicontext cart settings [PR #436]
- Added buttons on orders and settings pages [PR #435]
- Added sorting sortOptions in msOptions, msProductOptions [PR #407, #433]
- Added renderBadge to statuses [PR #432]
- Added settings link in miniShop2 menu [PR #430]
- Added msorder_remove permission [PR #421]
- Added icon for image in vendor modal creation [PR #420]
- Added usable choice of chunk in the windows for creating/editing statuses [PR #419]
- Added clone msCategory options on subcategory creation [PR #412]
- Added ids to product tabs [PR #408]
- Added filter on modCategory for options [PR #405]
- Added settings for order numeration [PR #393]
- Added example for webp in media source [PR #385]
- Added reloading order object after changes in changeOrderStatus method [PR #384]
- Added icons for tree from system settings [PR #365]
- Added product cost in cart [PR #358]

### Changed

- Fixed sorting by customer field in the order list [PR #468]
- Updated snippets: msCart, msOrder, msGetOrder and msGallery [PR #461]
- Changed the display encoding of collector messages [PR# 460]
- Changed order of tabs for category [PR #459]
- Expanded functionality of windows for quick creation/updating of product/category [PR #439]
- Fixed clone media source on update if is renamed [PR #438]
- Fixed ui bug header in modal window [PR #434]
- Update lexicons [PR #414]
- Ext.Loader remove asynchronous loading of strftime-min-1.3.js [PR #411]
- Display field key if caption and lexicon entry is empty [PR #401]
- Fix miniShop2.combo.Options paging on local mode [PR #400]
- Fixed deleting link from one-to-one deleting all links [PR #389]
- Switch context if the order context does not match [PR #388]
- Fixed paypal error [PR #387]
- Fixed error 500 if pdoTools not installed [PR #386]
- Change class name to variable in sort processor  [PR #381]
- Moved product gallery tabs if enabled ticket comments [PR #377]
- Moved product tabs [PR #376]
- Fix options bug [PR #374]
- Fix if impossible to remove the "Vendor" field [PR #372]
- Output context name if it is [PR #364]
- Notify user on move product in grid [PR #359]
- Fixed miniShop2.combo.Options [PR #355]

## [2.5.0 pl]

### Added

- Added translation into Belarusian (thanks @dmse4050)
- Improvement. Adding Delete / Update buttons preview in the product gallery [PR #346]
- Improvement. Add drag\'n\'drop sortable for miniShop2.combo.Options [PR #345]
- Improvement. Getting parameters for multi-domain [PR #340]
- Added class small in chunk.ms_cart.tpl [PR #319]
- Added support for *webp images [PR #318]

### Changed

- Fix resetting user id value on expand combobox [PR #351]
- Fix hiding content field via FC [PR #343]
- Fix bug when uploading pictures to the gallery, files remain in the root [PR #349]
- Fix bug when saving order and changing status [PR #348]
- Fix Preventing the removal of goods with the wrong (empty) count [PR #344]
- Fix TV update bug if there are more than 10 during CSV import [PR #341]
- Fixed error "Incorrect decimal value" [PR #338]
- Change update product from grid [PR #337]
- Fix "formatPrice", "formatWeight" [PR #336]
- Optimization of the withdrawal of orders and fix for recounting an order [PR #335]
- Fix cutting Czech characters from username in order [PR #334]
- Fix defaultSortField [PR #333]
- Refactoring Relationship Methods [PR #331, #332]
- Fix set default media source on change resource class_key [PR #330]
- Fix some bugs on manager pages [PR #327]
- Fix romanian lexicon [PR #324]

## [2.4.18 pl]

### Added

- [#315] Added romanian lexicon.
- [#316] Added webp extension for mediaSource.

### Changed

- Update chunks for Bootstrap 4.
- Fixed display of manager tree in MODX 2.7.1
- [#314] Fixed missing categories for options in settings.

## [2.4.17 pl2]

### Changed

- Fixed load of lexicons in contexts.

## [2.4.16 pl]

### Changed

- Fixed possible SQL injections by Agel_Nash
- Change miniShop2::changeOrderStatus
- Change "msProductGetListProcessor"

## [2.4.15 pl]

### Added

- Added new events: "msOnBeforeGetOrderCustomer", "msOnGetOrderCustomer"

### Changed

- Change miniShop2::getCustomerId
- Change submit::msOrderHandler
- Change getDeliveryRequiresFields::msOrderHandler

## [2.4.14 pl]

### Added

- Added new events: "msOnBeforeSaveOrder" and "msOnSaveOrder"

### Changed

- Change miniShop2.combo.Options
- Fixed msCategoryOption permission
- Change receiver validate
- Fixed size gallery [js]
- Fixed height options tree [js]
- Change msProductData::saveProductOptions()
- Change key index prefix length to 191 from 255
- Change new installs to create tables with "InnoDB" engine

## [2.4.13 pl]

### Added

- Added "payment_link" in the snippet msGetOrder.
- Added new event: "msOnGetStatusCart".
- Added ukrainian lexicon.

### Changed

- Fixed "cultureKey" option
- Change Order submit js.
- Fixed msProductData::loadOptions().

## [2.4.12 pl]

### Added

- Added dutch lexicons by Sterc
- Added greek frontend lexicon

### Changed

- When you change the price of a product with msOnGetProductPrice, the old_price will be changed only if the new price is lower.
- Fixed method msProductData:rankProductImages()

## [2.4.11 pl]

### Added

- [mgr] Add contexts list into filters at the orders page.
- [mgr] Add "expand,collapse,check,uncheck" actions to the categories and options trees.

### Changed

- Fixed default path to loading services in the loadCustomClasses() method.
- Update the cost of an orders after product addition.
- Improved processing of products options.
- [mgr] Fixed possible error on get orders statuses list.
- [mgr] Fix "xcheckbox" in a Product options.

### Removed

- Removed call of ms2Gallery::syncFiles() from msProductData::updateProductImage().

## [2.4.10 pl]

### Added

- Added events in the processors of msOrderProduct.

### Changed

- Fixed possible E_WARNING in the snippet msOrder.

## [2.4.9 pl]

### Changed

- Improved loading of pdoTools in snippets

## [12.4.8 pl]

### Added

- Added support of ms2Gallery 2.0.

### Changed

- Media source option "thumbnails" now uses key of array with parameters as alias for thumbnail.
- Fixed bug of gallery with drag-over in Firefox.

### Removed

- Removed system setting "ms2_product_thumbnail_size".

## [2.4.7 pl]

### Changed

- Fixed the loading of product plugins when they can be loaded multiple times.
- Fixed fatal error on get classes in settings with some 3rd party payment methods.
- Fixed bug with incorrect rank of thumbnails after a sorting.

## [2.4.6 pl]

### Added

- Added the checking of users email when getting a customer id for new order.

### Changed

- Improved compatibility with MODX 2.5.2.

## [2.4.5 pl]

### Changed

- Fixed possible error in log on create a new product from cli mode.
- Updated jGrowl to version 1.4.5.

## [2.4.4 pl]

### Changed

- [#242] Ability to specify only needed options in the snippet msProductOptions.
- [#212, #241] Fixed handling of a product options with a dot in the name.
- [#240] Fixed the reset of date fields when product has been edited via category grid.
- [#239] Fixed duplicate and empty options in msProductData.
- [#229, #238] Categories tree now respects the "resource_tree_node_name_fallback" system setting.

## [2.4.3 pl]

### Changed

- [#237] Fixed msProductData::get(\'options\') method.
- [#236] Ability to display category columns of an ordered product.
- [#231] Snippet msOptions now transfers id of a product into a chunk.
- [#230] Fixed the inability to change vendor of a product more than 1 times.
- [#228] Possible fix for "empty file" in product gallery on some server configurations.
- [#227] Improved performance of the grid with options in settings.

## [2.4.2 pl]

### Changed

- Fixed error when system setting "ms2_product_tab_gallery" is disabled.

## [2.4.1 pl2]

### Changed

- Fixed error with overwrite product options when update from category grid.

## [2.4.0 pl]

### Changed

- [#222] Optimized some code in chunks.

## [2.4.0 rc11]

### Changed

- [msGallery] Improved fetching of thumbnails in the snippet.
- [#220] [mgr] Improved the total numbers in the form of orders.

## [2.4.0 rc10]

### Changed

- msPaymentHandler::getOrderHash() now includes order num.

## [2.4.0 rc9]

### Changed

- [#215] Ability to specify working context for cart.

## [1.4.0 rc8]

### Changed

- [#218] The product options are active immediately after assigning them to categories.

## [2.4.0 rc7]

### Changed

- Reverted back #216 due to issues.
- [#216] [msGetOrder] Need to update pdoTools to version 2.5.6-pl to fix this.
- [msGetOrder] Orders are show to all if parameter &id is set.
- [mgr] Fixed number of rows in orders panel.

## [2.4.0 rc6]

### Changed

- [#216] [msGetOrder] Fixed ability to &includeTVs.

## [2.4.0 rc5]

### Removed

- Removed wrong "requires" field in msPayment settings.

## [2.4.0 rc4]

### Changed

- Improved migration of system settings when upgrade from older versions.

## [2.4.0 rc3]

### Changed

- [msGallery] Improved snippet in case when product has no media source set.
- Fixed work with autocomplete product options.

## [2.4.0 rc2]

### Changed

- Fixed duplicate of order number in msOrderHandler.

## [2.4.0 rc1]

### Changed

- Fixed loop error on change class key from modResource to msProduct.

## [2.4.0 rc]

### Added

- [msOrder] New parameter &userFields.
- [msGetOrder] Added chunk tpl.msGetOrder.
- [msOptions] Added chunk tpl.msOptions.
- [msProductOptions] Added chunk tpl.msProductOptions.
- [msGallery] Added chunk tpl.msGallery.
- [msGallery] Added Fotorama script out from the box.

### Changed

- All snippets are completely rewritten.
- All chunks uses Fenom syntax.
- Improved compatibility with MySQL 5.7.
- Improved orders form panel.
- [msOrder] Chunk tpl.msOrder.outer renamed to tpl.msOrder.
- [msCart] Chunk tpl.msCart.outer renamed to tpl.msCart.
- [msGetOrder] Now acts as usual snippet and do not set placeholders to the page by default.
- Improved email chunks. Added common email template.

### Removed

- [msOrder] Removed chunks tpl.msOrder.delivery, tpl.msOrder.payment and tpl.msOrder.success.
- [msCart] Removed chunks tpl.msCart.row and tpl.msCart.empty.
- [msGetOrder] Removed chunk tpl.msGetOrder.row.
- [msOptions] Removed chunks tpl.msOptions.outer and tpl.msOptions.row.
- [msProductOptions] Removed chunks tpl.msProductOptions.outer and tpl.msProductOptions.row.
- [msGallery] Removed chunks tpl.msGallery.outer, tpl.msGallery.row and tpl.msGallery.empty.

## [2.4.0 beta3]

### Changed

- Small improvements of product gallery.
- Improved ExtJS settings panel.

## [2.4.0 beta2]

### Added

- Added system setting "ms2_template_category_default".
- New system to register 3rd party classes of extensions.
- New system to register 3rd party plugins for objects model.
- New logo.

### Changed

- Improved referrals registration.
- Improved ExtJS product panel.
- Emails chunks are now processed by pdoTools.
- Replaced modX::toJSON and modX::fromJSON calls to native functions.
- Improved duplicate of products and categories.
- The data fields of the product are added to the tags of the resource: [[*price]], [[*article]] etc.
- Improved registration of JS and CSS on frontend.
- Javascript callbacks now are arrays with functions. New functions to register and remove callbacks.
- Updated model for MySQL 5.7.
- Improved product gallery.

## [2.4.0 beta1]

### Changed

- Improved categories with products.
- Improved menu of categories in resources tree.
- Ability to change class_key of category.
- Many improvements of ExtJS category panel and products grid.
- Setting ms2_category_content_default is now empty by default.

## [2.4.0 beta0]

### Added

- Added icons for CRCs in managers tree.

### Changed

- Fixed php type of "article" in msProductData xPDO object.
- Improved orders panel.
- Updated builder.
- Minimum version is MODX 2.3.

## [2.2.0 pl2]

### Changed

- ID for Category\'s options tab
- Fix installation for MODX 2.4.0
- msProductOptions product property

## [2.2.0 beta4]

### Changed

- Category pagination fix.
- Fixed bug removal options when modifying and generating images of products
- Don\'t display tplOuter when all options are empty with hideEmpty=1

## [2.2.0 beta3]

### Changed

- Measure units for options.
- Restrictions for option names.
- Superboxselect and checkbox option types.
- Fixed bug with empty options after modResource save.

## [2.2.0 beta2]

### Changed

- Groups of options support.
- hideEmpty parameter in msProductOptions snippet.
- Fixed some bugs.

## [2.2.0 beta]

### Changed

- Custom product options support. More info at modx.pro.
- Fixed TV showing under content.
- Some code refactoring.

## [2.1.12 pl]

### Changed

- Improved installation script for MODX 2.4.

## [2.1.11 pl]

### Added

- Added new events: "msOnBeforeGetOrderCost" and "msOnGetOrderCost".

### Changed

- [mgr] Direct links to orders in manager.

## [2.1.10 pl1]

### Added

- Added support of Tickets 1.6.

### Changed

- Updated pdoTools version in the installer.

## [2.1.9 beta]

### Changed

- Fixed modification of order price by delivery and payment in default order handler.
- Fixed processing of decimal prices in PayPal payment class.
- Improved chunk tpl.msOrder.payment.

## [2.1.8 pl3]

### Changed

- Fixed controllers for MODX 2.3.
- Fixed routes to processors for MODX 2.3.
- Fixed product getlist processor for MODX 2.3.
- Fixed sorting products in category grid by clicking on column header.
- Disabled Bootstrap icons for MODX 2.3.
- Fixed product gallery for MODX 2.3.
- Fixed issue with deleting product files children in MODX 2.3.
- Fixed "autocomplete_err_noquery" error in MODX 2.3.
- [#148] Fixed duplicate connector.
- Fixed work of "minishop2-combo-user" in MODX 2.3.

## [2.1.8 beta]

### Added

- Added field "name" in object msOrderProduct for storing pagetitle of the product.
- Added integer field "type" to msOrder.

### Changed

- Fixed log level in PayPal method.
- Fixed CustomerProfile connection in schema.
- Improved price and weight formatting in orders table.
- Some UI improvements and fixes.

## [2.1.7 pl5]

### Changed

- [#131] Fixed update of product thumb when you update thumbnails.
- [#129] [msGetOrder] Fixed setting of placeholders.
- Fixed work with comments on product panel.
- [msOrder] Now snippet loads "building", "room" and "comment" from extended field of users profile.
- [mgr] Fixed parameter "maxUploadSize" in gallery.

## [2.1.7 pl1]

### Added

- [#113] Added Lithuanian lexicons.
- New system setting "ms2_category_remember_grid".

### Changed

- [#119] Improved compatibility with AjaxManager.
- [#118] Fixed negative cost in payment and delivery methods.
- [#112] Restrict cart items to specific contexts.
- [#111] Fixed remove of products links.
- [#107] Fixed empty customer field if fullname is not specified.
- [#106] Additional check of friendly filename in gallery.

## [2.1.6 pl4]

### Changed

- [#110] Fix generate thumbs on upload for Amazon S3.
- Fixed counting money spent in new customers.
- [#104] Fixed placeholder [[+cart_weight]] in emails.
- [#102] Improved checking of thumbnails url.
- [#98] Refactored permissions in processors.
- [#94] Formatted placeholder [[+cost]] in snippet msCart
- [#78] Fixed setting flag isfolder to false for old category of the product.
- Fixed handling of non-ajax requests.

### Removed

- Removed unnecessary ajax request on add to cart. Fixed possibly E_NOTICE.

## [2.1.5 pl]

### Added

- Added default media source in product "create" processor.
- Added default template in product "create" processor.
- Added buttons in orders management page.

### Changed

- Improved rename of files in gallery.

## [2.1.4 pl5]

### Added

- Added script for import products in core/components/minishop2/import/csv.php.

### Changed

- Fixed icons in chunks.
- [#95] Fixed price and weight format.
- Improved installator. Now you can update chunks on install.
- Fixed possible errors on thumbnail generation.
- Progressive thumbnails in gallery.

## [2.1.3 pl2]

### Added

- Support Bootstrap3.

### Changed

- Fixed E_WARNING in snippet msOptions.
- Fixed bug with php-apc on create order.

## [2.1.2 pl2]

### Changed

- Fixed possibly E_NOTICE in snippets.

## [2.1.2 pl]

### Added

- Added support of non-image files in gallery.
- Added ability to hide tabs of product page in manager. See new system settings.

### Changed

- [#77] Fixed change type of existing resource to "msProduct".
- Improved style of horizontal product tabs.
- Improved proportions in settings tab of category.
- Improved rename of product images.
- Improved retrieving of first thumbnail of image in gallery.
- If you specified wrong "ms2_product_thumbnail_size" parameter, gallery will still work.
- Improved snippet "msGallery" for display non-image files.
- [#84] Fixed displaying of  email of vendor in manager.

## [2.1.1 pl2]

### Changed

- Fixed parameter "&parents" in msProducts.

## [2.1.1 pl]

### Changed

- Snippet msProducts supports pdoTools 1.8.0. Parameter "&showHidden" enabled by default.
- Fixed fatal error with "clearCache" when msProduct created trough processor and it`s parent is not msCategory.
- Improved generation of thumbnails.

## [2.1.1 pl]

### Added

- Added support of component "msDiscount".
- Added counting of total spent sum by every customer in msCustomerProfile.

### Changed

- Fixed access permissions tab on product update.
- Fixed getPrice and getWeight calls in snippet msProducts.
- Improved xtype "minishop2-combo-user".

## [2.1.0 pl2]

### Changed

- Fixed placeholders on msProduct page due to issues with @INLINE chunks.

## [2.1.0 pl1]

### Added

- Added new events: "msOnGetProductPrice" and "msOnGetProductWeight".

### Changed

- Fixed wrong events in database from previous release.
- Changed "vendor_" to "vendor." in msProduct::toArray() for sameness with the snippet msProducts.
- Moved all logic from old action.php to new plugin. File leaved for compatibility with users modified javascript.

## [2.1.0 pl]

### Added

- Added method msPayment::getCost().
- New object "msCustomerProfile". It can be extended by plugins like "msProductData".
- Added new fields in "msProductFile": "hash" for sha1 of file and json field "properties".
- Added check for duplicate images in product gallery by checking hash of the content of file.
- Added new parameters for media source: "maxUploadWidth" and "maxUploadHeight" for frontend image resize.
- Added renaming files of product gallery together with thumbnails.
- [#73] Added virtual vendor fields. You can get it by $res->get(\'vendor_name\');
- [#65] Added new system events: "msOnBeforeValidateOrderValue" and "msOnValidateOrderValue".
- [#64] Added ability to stop switching order status from system plugin.
- [#63] Added new parameters for media source: "imageNameType". Switching to "friendly" will generate names for uploaded files by FURLs algorithm.
- [#61] Added ability to sort products in category by drag and drop.
- [#56] Added JSON field "properties" to "msProductFile".
- [#52] Added ability to customize orders in manager by 3 system setting: "ms2_order_grid_fields", "ms2_order_address_fields" and "ms2_order_product_fields".
- Added method PayPal::getPaymentLink() for continuing interrupted payment process. You will see [[+payment_link]] in emails.
- Added parameters "&tplSingle" and "&toSeparatePlaceholders" to snippet msGallery.

### Changed

- Changed default sort in goods grid on "menuindex, ASC".
- Improved method `msDelivery::getCost()`.
- Improved method msOrderHandler::getCost(). Now you can specify additional percent for delivery and payment in manager.
- Plugin "miniShop2" can automatic save referrers.
- In snippet "msProducts" you can override "where", "select", "leftJoin", "innerJoin" and "rightJoin" properties. Added pdoFetch 1.4.1 support.
- Improved other snippets.
- Changed uploader in product gallery to "Plupload" (Thanks to Alex Rahimov).
- Gallery upload processor now can receive parameters "id" and "file" for external images upload.
- [#77] Fixed changing type of existing resource to "msCategory".
- [#76] Fixed parameter "offset" in msGallery.
- [#75] Remove multi-category links when category removed.
- [#74] Refresh data in order from users profile if he is authenticated.
- [#66] Fixed saving payments methods when create a new delivery.
- [#62] Fixed work with "*.gif" files in products gallery.
- [#59] Improved regular expression for email verification.
- [#59] Improved validation of customer name and email when create order.
- [#59] msOrderHandler::add() now can return an error.
- [#59] Improved registration of javascript on frontend.
- [#59] Improved show\\hide of msMiniCart with css.
- [#59] Refactored default frontend javascript.
- [#59] Works with no javascript. (Thanks to Alexey Kartashov)
- [#58] Fixed PayPal non-USD currency.
- [#50] Fixed checking of the existence of the Tickets component.
- [#5] Possible fixed "Cannot execute queries while other unbuffered queries are active" on php < 5.3.
- Some fixes for MySql STRICT_TRANS_TABLES mode.
- Updated jQuery to version 1.10.2
- Gallery UI improvements for MODX 2.2.9
- Returned action.php for backward compatibility with the old javascript

## [2.0.1 pl3]

### Added

- Added german lexicon.

### Changed

- Now you can specify version of file in "ms2_frontend_js".
- [#60] Fixed type of field "index" in "msOrder".
- Improved listing of products in the categories of manager.

## [2.0.1 pl2]

### Changed

- Improved submit of order form.
- msProducts saves order of ids received through &resources=``. It need for smooth work with mSearch2.
- [mgr] Fixed search in vendors combo

## [2.0.1 pl1]

### Added

- Added loading of lexicons for 3rd party payment methods. They must be named in "msp.%name%.inc.php" format.
- Added placeholder [[+payment_link]] in the new user email. It will work only if payment method has function getPaymentLink(msOrder $order);
- [#45] Added system setting for specify default content of category.

### Changed

- [#53] Completely refactored call and processing plugin events.

### Removed

- Removed placeholder [[+id]] from product page because of issues.

## [2.0.1 pl]

### Added

- Added 2 new events on order remove: "msOnBeforeRemoveOrder" and "msOnRemoveOrder".

### Changed

- Improved classes: "msProduct" and "msCategory". Now `$modx->getCollection(\'msProduct\');` returns only products.

## [2.0.1 beta3]

### Changed

- Fixed msGallery

## [2.0.1 beta2]

### Added

- [#42] Added parameter "returnIds" to snippet msProducts.
- Added setting placeholder [[+idx]] to snippets msGallery and msProducts.
- Added parameter "where" in snippet msGallery, for specify JSON encoded string with additional query data.
- Added parameters "limit" and "offset" for pagination. msGallery can be used with getPage now.

### Changed

- [#44] Enabled duplicate of category.
- [#41] Fixed panel with tvs on product create.
- Parameter "resources" not suppressing "parents" in msProducts anymore. Now they working together: resources that are not in parents will not be returned.
- Snippet msGallery now can to display placeholders like [[+600x]] or [[+x600]].
- Fixed display an original image in msGallery. If upgrade, replace placeholders [[+image]] to [[+url]] in chunk "tpl.msGallery.row" manually.

## [2.0.1 beta1]

### Changed

- Maybe fixed bug with php-apc and sessions
- Fixed plugin params on events "msOnBeforeCreateOrder" and "msOnCreateOrder". Now you can change $msOrder by link.
- Fixed error with no changing status of order in manager.

## [2.0.1 beta]

### Added

- [#38] Added "menuindex" in product fields.
- [#35] Added 2 system setting to enable or disable the remembering of panel tabs.
- [#29] Added verification of object instance, when loading neighborhood resources in manager.
- New permissions for work with order: "save" and "view". New events for update order.
- Added ability to add\\update\\remove products in order.

### Changed

- [#37] Ability to override method miniShop2::changeOrderStatus() in custom order class.
- [#32] Enabled displaying of errors when uploading files in product gallery.
- [#30] "miniShopManagerPolicy" is automatically assigned to a group "Administrators".
- [#28] Returned the lost fields in images of msGallery.
- [#27] Improved ajax requests in default javascript.
- [#26] Improvements of categories tree.
- Fixed quick fields in snippet msOrder. Update your chunks for delivery and payment methods.
- Improved "totalVar" placeholder in snippet msGallery.
- Fixed model. Added proper primary keys for xPDOObjects.
- Ability to load only "miniShop2Config" object on frontend, without default javascript and jQuery.
- Fixed parameter "depth" in snippet "msProducts".

### Removed

- [#36] Removed filter_var(), because of issues on stupid hostings.
- [#25] Removed replacing of empty alias to id. Added 2 system setting for switching using resource id as alias for categories and products.

## [2.0.0 pl3]

### Changed

- Compatibility with pdoTools 1.2.0

## [2.0.0 pl2]

### Added

- Added ability to create system setting "ms2_cart_max_count" to override maximum number of products for one operation.
- Added system setting "ms2_price_snippet" for modification of product price.
- Added system setting "ms2_weight_snippet" for modification of product weight.

### Changed

- [mgr] Fixed formatting of dates in category grid.
- [mgr] Fixed decimals in product category grid.
- Fixed placeholders in emails subjects.
- Fixed generation of thumbnails in gallery for working with ImageMagick.
- Fixed link type "Many to many".
- Fixed requirement of non-existing permission "update_document" in processors.
- Product key in msCartHandler now generates with using "$price" and "$weight", because they can be modified when adding to cart.

## [2.0.0 pl1]

### Added

- Added selection of product links in snippet msProducts. See the new snippet properties.
- Added ability to use msProducts with any modResource class.
- Added property "tvPrefix" to msProducts for compatibility with getResources.
- Added property "outputSeparator" to snippets msOptions and msProducts.
- Added system parameter "ms2_price_format" for specifying how to format price of product.
- Added system parameter "ms2_price_format_no_zeros" for optional removing extra zeros at the end of price.
- Added system parameter "ms2_weight_format" for specifying how to format weight of product.
- Added system parameter "ms2_weight_format_no_zeros" for optional removing extra zeros at the end of weight.
- [mgr] New icons in tree

### Changed

- [mgr] Changing of product image now cleans its cache.
- Small improvements of the snippets at initialization.

## [2.0.0 rc6]

### Changed

- Fixed cleaning pdoTools in msGallery
- Improved saving payment method in order when quickly switch delivery.

## [2.0.0 rc5]

### Changed

- Integration of PayPal express-checkout payment method.

## [2.0.0 rc4]

### Changed

- Fixed bugs in snippets
- Fixed joining images by rank when includeThumbs.

## [2.0.0 rc]

### Added

- [mgr] Added displaying of nested products in categories. System setting "ms2_category_show_nested_products" can disable it.
- [mgr] Added the ability to link products together.
- [mgr] Added link to resource from ordered products.
- [mgr] Added ability to specify web document for Vendor by property "resource".
- [#10] Added checking for negative value of adding products in cart.
- [#12] Added regeneration site maps after new product create.
- [#14] Added check of "register_globals" on cart/add.
- Added system setting "ms2_product_thumbnail_size" for setting default size of product thumbnail.
- Added vendor placeholders on product page. Now you can use [[+vendor.name]], [[+vendor.logo]] etc.
- Added beta scripts for console converting miniShop1 to miniShop2.
- Added partial french translation.
- Added method miniShop2::getTagged() from MS1.
- Added ability to load plugins, that can add new or overload existing product fields in model and manager.
- Added parameters for joining thumbnails and tvs in snippets msProducts, msCart and msGetOrder.
- Improved save of product options.

### Changed

- [#6] Fixed error when order makes authenticated user without email.
- [#8] Fixed remove of order.
- [#9] Fixed date formatting in manager for working in Firefox.
- Fixed automatic install of pdoTools.
- Fixed fetching images in snippet msGallery
- Other fixes and improvements.

## [2.0.0 beta-1]

### Added

- Added manager pages
- Added create and manage orders

## [2.0.0 beta-0]

- Initial release.
',
    'license' => 'GNU GENERAL PUBLIC LICENSE
    Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS
',
    'readme' => '--------------------
miniShop2
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
Owner: MODX RSC – Russian Speaking Community  https://github.com/modx-pro
Support and development  Nikolay Savin https://t.me/biz87
With questions and problems - contact the https://modx.pro  AND  https://t.me/ru_modx
--------------------

Feel free to suggest ideas/improvements/bugs on GitHub:
https://github.com/modx-pro/miniShop2


',
    'chunks' => 
    array (
      0 => 'msProduct.content',
      1 => 'msProduct.content.fenom',
      2 => 'tpl.msProducts.row',
      3 => 'tpl.msCart',
      4 => 'tpl.msCartNew',
      5 => 'tpl.msMiniCart',
      6 => 'tpl.msOrder',
      7 => 'tpl.msGetOrder',
      8 => 'tpl.msOptions',
      9 => 'tpl.msProductOptions',
      10 => 'tpl.msGallery',
      11 => 'tpl.msGalleryNew',
      12 => 'tpl.msEmail',
      13 => 'tpl.msEmail.new.user',
      14 => 'tpl.msEmail.new.manager',
      15 => 'tpl.msEmail.paid.user',
      16 => 'tpl.msEmail.paid.manager',
      17 => 'tpl.msEmail.sent.user',
      18 => 'tpl.msEmail.cancelled.user',
    ),
    'setup-options' => 'minishop2-4.1.4-pl/setup-options.php',
    'requires' => 
    array (
      'php' => '>=7.0.0',
      'modx' => '<3.0.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'fabecaef642bfc9e7ab8bf784e842568',
      'native_key' => 'minishop2',
      'filename' => 'modNamespace/9231e6a9c213ef1bbde1c618dde6634b.vehicle',
      'namespace' => 'minishop2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f47baa7dbeca8dfb00ee35758fa72586',
      'native_key' => 'mgr_tree_icon_mscategory',
      'filename' => 'modSystemSetting/97d0d6ebf38e339917bf6ecc8b1cbcef.vehicle',
      'namespace' => 'minishop2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b7d570540a0812efff0f67da2329eee',
      'native_key' => 'mgr_tree_icon_msproduct',
      'filename' => 'modSystemSetting/67cfb18448b4f636ae5451f86b6657df.vehicle',
      'namespace' => 'minishop2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '83e6ce580a779d33b4b58f58230598d3',
      'native_key' => 'ms2_services',
      'filename' => 'modSystemSetting/f177a1ab722f1210b402ba56474c922a.vehicle',
      'namespace' => 'minishop2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '35f264d6909d48e62fc07b3c42dcf155',
      'native_key' => 'ms2_plugins',
      'filename' => 'modSystemSetting/d156b38ff9a3203fc7da4e5e78aa1608.vehicle',
      'namespace' => 'minishop2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1710e9268a17a376b30dbfed22664c48',
      'native_key' => 'ms2_chunks_categories',
      'filename' => 'modSystemSetting/82d56cbd6aebebe15c6aae63ba41fbf1.vehicle',
      'namespace' => 'minishop2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c7081ef6fb57b2308c2550d2a4bcdf16',
      'native_key' => 'ms2_tmp_storage',
      'filename' => 'modSystemSetting/0f963086fa6c34c5e469aee4fdacb11e.vehicle',
      'namespace' => 'minishop2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '16504228c76363608680b87fc1766bd8',
      'native_key' => 'ms2_use_scheduler',
      'filename' => 'modSystemSetting/2071991869ead1ef44737e83aadca65d.vehicle',
      'namespace' => 'minishop2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '576bcaf8340971458f093327bbee10d8',
      'native_key' => 'ms2_category_grid_fields',
      'filename' => 'modSystemSetting/c8e2c28d949c8383d65e1c2cea6fe5ef.vehicle',
      'namespace' => 'minishop2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '122077f4fd7567cf9c7cbebfbcb2ba05',
      'native_key' => 'ms2_category_show_nested_products',
      'filename' => 'modSystemSetting/55fceccf527f3415cae1eed51633af40.vehicle',
      'namespace' => 'minishop2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e239d3436a14dc2e7d2df35508be8097',
      'native_key' => 'ms2_category_show_comments',
      'filename' => 'modSystemSetting/5a996e7f6402bfb4b4535ca8f7ae69d5.vehicle',
      'namespace' => 'minishop2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2b80b968e2c7d92e42e22a0d1059ca6d',
      'native_key' => 'ms2_category_show_options',
      'filename' => 'modSystemSetting/e6e496a0c49fc52a32625d5f9bc37ccf.vehicle',
      'namespace' => 'minishop2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fe5933bd1272d125f1aa59edc9d2f05a',
      'native_key' => 'ms2_category_remember_tabs',
      'filename' => 'modSystemSetting/3b116ae47818391098407e0e42de8eff.vehicle',
      'namespace' => 'minishop2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3cc14e2050fc4099b362e82620e1813e',
      'native_key' => 'ms2_category_id_as_alias',
      'filename' => 'modSystemSetting/a9a8c9d0255f02a5c6fd091ea74660c7.vehicle',
      'namespace' => 'minishop2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9ab1a9d2d859dd4d4a9ebf4e55b45b8',
      'native_key' => 'ms2_category_content_default',
      'filename' => 'modSystemSetting/ab06d69ec3d194f3c5fbf8e22c2b67c4.vehicle',
      'namespace' => 'minishop2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b3f2401ad0d222f4acec3fc49bdf3abe',
      'native_key' => 'ms2_template_category_default',
      'filename' => 'modSystemSetting/85c25c92b2c7e070a353ad24509a11e2.vehicle',
      'namespace' => 'minishop2',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bfac368d4b5e48908526c20fda85ae20',
      'native_key' => 'ms2_product_extra_fields',
      'filename' => 'modSystemSetting/e74cd40fd6404906aea624317d643435.vehicle',
      'namespace' => 'minishop2',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6a7b494e5de14d886a2c63a54225a8e8',
      'native_key' => 'ms2_product_show_comments',
      'filename' => 'modSystemSetting/5a0e85655c454b550cc8e6e049b5408d.vehicle',
      'namespace' => 'minishop2',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd13b05d8bd1b08df4db88a9cc64b5724',
      'native_key' => 'ms2_template_product_default',
      'filename' => 'modSystemSetting/31d7e493672e526ed752fceee01420ef.vehicle',
      'namespace' => 'minishop2',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b2ecd6056b90229dfd949bb473fe918',
      'native_key' => 'ms2_product_show_in_tree_default',
      'filename' => 'modSystemSetting/067e3fa85e002f9aa9b84097642147fc.vehicle',
      'namespace' => 'minishop2',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fa11707bb85d65282202b568c794950b',
      'native_key' => 'ms2_product_source_default',
      'filename' => 'modSystemSetting/5f4119becd795e3fc0d7407be0c57d8a.vehicle',
      'namespace' => 'minishop2',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '47bf2b998ab9910795d774345b802139',
      'native_key' => 'ms2_product_thumbnail_default',
      'filename' => 'modSystemSetting/e45344a02bb0c0870fd579e9aaf71cfd.vehicle',
      'namespace' => 'minishop2',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c715d4fe6523172b31890a120fa90090',
      'native_key' => 'ms2_product_thumbnail_size',
      'filename' => 'modSystemSetting/1f0f1f63b84f405895ddc2841c659e49.vehicle',
      'namespace' => 'minishop2',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8934763ccf7e9975ba4074bcc451ae73',
      'native_key' => 'ms2_product_remember_tabs',
      'filename' => 'modSystemSetting/cb455b944f8dcc62143619cc3c334a5f.vehicle',
      'namespace' => 'minishop2',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dcec2e7d25d667b6ec46505fe1c4285a',
      'native_key' => 'ms2_product_id_as_alias',
      'filename' => 'modSystemSetting/b4ec8cdfa650235db682f638111b49d7.vehicle',
      'namespace' => 'minishop2',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '859fdbd91eb4519253517c276a1234ab',
      'native_key' => 'ms2_price_format',
      'filename' => 'modSystemSetting/a99db067a6a30e99c2ef685027d1d780.vehicle',
      'namespace' => 'minishop2',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'be972a51352223865bf9fa51784e3c68',
      'native_key' => 'ms2_weight_format',
      'filename' => 'modSystemSetting/094c6f7921aec66c315efc99acfe4af4.vehicle',
      'namespace' => 'minishop2',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7b00ac37144104c7d7a11701064dd304',
      'native_key' => 'ms2_price_format_no_zeros',
      'filename' => 'modSystemSetting/7d7e34fff74d3a60b2fa2f629026208b.vehicle',
      'namespace' => 'minishop2',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2456824ad1ee0aa3b4ab584928c6c2d2',
      'native_key' => 'ms2_weight_format_no_zeros',
      'filename' => 'modSystemSetting/b7424ca9320bf41735991f7abc9221a5.vehicle',
      'namespace' => 'minishop2',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '337e7979bb1b166b58b10c7e66c4bf6c',
      'native_key' => 'ms2_product_tab_extra',
      'filename' => 'modSystemSetting/aec6b981e1144687a0daa9be96b4386e.vehicle',
      'namespace' => 'minishop2',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1c7e4b94c13f6c9053247812962de1e5',
      'native_key' => 'ms2_product_tab_gallery',
      'filename' => 'modSystemSetting/b8b374896445c72b91b912f1ae8eedfb.vehicle',
      'namespace' => 'minishop2',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4ca6e1aac58750b7c30d365391a5941c',
      'native_key' => 'ms2_product_tab_links',
      'filename' => 'modSystemSetting/9c1f3d9403d55e94c9c0f955fce54f23.vehicle',
      'namespace' => 'minishop2',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd64908726bfb6e31edebf59cc83b62a8',
      'native_key' => 'ms2_product_tab_options',
      'filename' => 'modSystemSetting/bf7266deaf3c5cc4f4f7c141f135c61e.vehicle',
      'namespace' => 'minishop2',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e3aad27a670df8bf1ff3cc6b94dfeced',
      'native_key' => 'ms2_product_tab_categories',
      'filename' => 'modSystemSetting/316d2daa9f167e5fa8cb5332b7011347.vehicle',
      'namespace' => 'minishop2',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5bd9039252c7044f5f5a952ff1c894da',
      'native_key' => 'ms2_cart_handler_class',
      'filename' => 'modSystemSetting/c1c22318c18ae9f43d4c3b733de9ba3a.vehicle',
      'namespace' => 'minishop2',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfe1956a98d05cf7efa705e223aba9c0',
      'native_key' => 'ms2_cart_context',
      'filename' => 'modSystemSetting/aefa0711410b0743a9dbf3249aa4feed.vehicle',
      'namespace' => 'minishop2',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aaecbe104b60746a280e9b3c2d310786',
      'native_key' => 'ms2_cart_max_count',
      'filename' => 'modSystemSetting/0ad7ab2a10eaf78629083b5409928c5b.vehicle',
      'namespace' => 'minishop2',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '41f5f1af29e2bc56e457200849963de1',
      'native_key' => 'ms2_cart_product_key_fields',
      'filename' => 'modSystemSetting/0370d4dd60246d76a8e67326722c21d4.vehicle',
      'namespace' => 'minishop2',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e73b7d4140fa160133e9bb2e95af444b',
      'native_key' => 'ms2_order_format_phone',
      'filename' => 'modSystemSetting/2f3ddf258dd4e3b2a6063c4d6c1013a5.vehicle',
      'namespace' => 'minishop2',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '93819150b23a5660ea7cbd1c62463c60',
      'native_key' => 'ms2_order_format_num',
      'filename' => 'modSystemSetting/c6a117c272fb6f9e8b9a78c6edf85e7d.vehicle',
      'namespace' => 'minishop2',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'addf6f71ee0231637f7ef9cd586f6f05',
      'native_key' => 'ms2_order_format_num_separator',
      'filename' => 'modSystemSetting/97bf09c0fdba51faac4b421b8067ecd0.vehicle',
      'namespace' => 'minishop2',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ea3c34cb7fdd7027074056f9a898a887',
      'native_key' => 'ms2_order_grid_fields',
      'filename' => 'modSystemSetting/a46b4b527a7b67a20b7f9669c7e7f9e9.vehicle',
      'namespace' => 'minishop2',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '799aecc6fe6d50252a8186dbd7f223e4',
      'native_key' => 'ms2_order_address_fields',
      'filename' => 'modSystemSetting/35b635e537182ec7cc8536fb6fc33145.vehicle',
      'namespace' => 'minishop2',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ead857555af39b82bf7e6476d125aeb3',
      'native_key' => 'ms2_order_product_fields',
      'filename' => 'modSystemSetting/b6baaa40f8ed7db7f3632a7f3a5f111b.vehicle',
      'namespace' => 'minishop2',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bcc8afd896ac281772de599553901890',
      'native_key' => 'ms2_order_product_options',
      'filename' => 'modSystemSetting/0f17b95f8ba4d0b883a75aadce3c7bda.vehicle',
      'namespace' => 'minishop2',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3d3e7eb0abd09ca624131c1861a06174',
      'native_key' => 'ms2_order_tv_list',
      'filename' => 'modSystemSetting/88ed72fcd85b4c30623c7db98261a24a.vehicle',
      'namespace' => 'minishop2',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8bb56dba9ee5391532d87ee534350aaf',
      'native_key' => 'ms2_order_handler_class',
      'filename' => 'modSystemSetting/717f7149fccb52ed9514531f90ffd889.vehicle',
      'namespace' => 'minishop2',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3dcb8fd11d23036ed12882474042b3ba',
      'native_key' => 'ms2_order_user_groups',
      'filename' => 'modSystemSetting/19a6843d85c53bb0e6b0510ef8319b44.vehicle',
      'namespace' => 'minishop2',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd79dfa5731f7a6161988eef39882c969',
      'native_key' => 'ms2_date_format',
      'filename' => 'modSystemSetting/5280406fbf96c1abad851b76e08c7a0a.vehicle',
      'namespace' => 'minishop2',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '01c14c59c45bf3dbd1a86be9a0882b6f',
      'native_key' => 'ms2_email_manager',
      'filename' => 'modSystemSetting/f737f685b38e8968081cf55a6dd324ba.vehicle',
      'namespace' => 'minishop2',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1878e09fd7bc49c5eed76171e72683f1',
      'native_key' => 'ms2_frontend_css',
      'filename' => 'modSystemSetting/6a8546b9308802efd474f243ee9aa1b8.vehicle',
      'namespace' => 'minishop2',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '52ba4774493a7e13d7f17e039d8d24c5',
      'native_key' => 'ms2_frontend_message_css',
      'filename' => 'modSystemSetting/54faf4869dfd6f7df082346e8d9bfaf0.vehicle',
      'namespace' => 'minishop2',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c4c46bb115e9a97c6de09ee1b7c54878',
      'native_key' => 'ms2_frontend_js',
      'filename' => 'modSystemSetting/e7fc525d5db0ccfc9c868cd40838662c.vehicle',
      'namespace' => 'minishop2',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4bbb8b63c85d0813abf508464c60c179',
      'native_key' => 'ms2_frontend_message_js',
      'filename' => 'modSystemSetting/b49d68a952dd474a03914118a232dc48.vehicle',
      'namespace' => 'minishop2',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a290b7189b8c26a07d0fa3633b4e4874',
      'native_key' => 'ms2_frontend_message_js_settings',
      'filename' => 'modSystemSetting/0c1d9b4bfae6e346e2d1e6635d31c9f8.vehicle',
      'namespace' => 'minishop2',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '62c2ef2d0b72007203ac0eacdd0073df',
      'native_key' => 'ms2_register_frontend',
      'filename' => 'modSystemSetting/edebebb6da5acf7b06afc7e2f25eed58.vehicle',
      'namespace' => 'minishop2',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9cecf9d53816721396ad40c73220ae9c',
      'native_key' => 'ms2_toggle_js_type',
      'filename' => 'modSystemSetting/2b4d5c6de96d3fb64e86f8b3c996f5a9.vehicle',
      'namespace' => 'minishop2',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '74807ee97962589d0f533c8a3f29ba44',
      'native_key' => 'ms2_vanila_js',
      'filename' => 'modSystemSetting/ade5aeede18b0a280cf0c26ad277091e.vehicle',
      'namespace' => 'minishop2',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b2c7377de624de7e9d980f9058e74596',
      'native_key' => 'ms2_frontend_notify_js_settings',
      'filename' => 'modSystemSetting/0ea9842b2f2f9a46f7f09f9484e2c6ec.vehicle',
      'namespace' => 'minishop2',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ba03e33e63562b99216a9fe5c5f4ca5c',
      'native_key' => 'ms2_cart_js_class_path',
      'filename' => 'modSystemSetting/28da5c51cda8c1c4cf878b94b99600a1.vehicle',
      'namespace' => 'minishop2',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b7967779fa27c39eae2c07f364f58371',
      'native_key' => 'ms2_cart_js_class_name',
      'filename' => 'modSystemSetting/57e1cbbf44c0937ae0f89f8df4266d8b.vehicle',
      'namespace' => 'minishop2',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b9ab41fbec8d121d82a80b94a9b5dc69',
      'native_key' => 'ms2_order_js_class_path',
      'filename' => 'modSystemSetting/3f7b7b3f81a989e0c29a6ad02ed5557f.vehicle',
      'namespace' => 'minishop2',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a1288e8be0f62ae781b056c74305d9a8',
      'native_key' => 'ms2_order_js_class_name',
      'filename' => 'modSystemSetting/2d249686f27cd433f22fd65fed9af2b7.vehicle',
      'namespace' => 'minishop2',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db44c752c58d394a09db50e9a01daff6',
      'native_key' => 'ms2_notify_js_class_path',
      'filename' => 'modSystemSetting/b1ce58e655c203ec7eb267d78b26527f.vehicle',
      'namespace' => 'minishop2',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '929637c657276ca2d97b2aa9eb66177f',
      'native_key' => 'ms2_notify_js_class_name',
      'filename' => 'modSystemSetting/2fc3209436fbbbecf508a5f0bc69a4d9.vehicle',
      'namespace' => 'minishop2',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '25a475f19f294d0bb068db73f6a43a94',
      'native_key' => 'ms2_status_draft',
      'filename' => 'modSystemSetting/a68fc4983a911cb578b5cc6ff03fe388.vehicle',
      'namespace' => 'minishop2',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ae993a124ba7d857a36f841486568bb7',
      'native_key' => 'ms2_status_new',
      'filename' => 'modSystemSetting/7cb5283f8ca378932ceb325f115bd636.vehicle',
      'namespace' => 'minishop2',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b51cc22a28a8b47524623361a604fb83',
      'native_key' => 'ms2_status_paid',
      'filename' => 'modSystemSetting/b29409df075dff830e514d23291027cc.vehicle',
      'namespace' => 'minishop2',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4dfe7dfaa6c1c78389d3cf6a36eb47d1',
      'native_key' => 'ms2_status_canceled',
      'filename' => 'modSystemSetting/f97a3adf539ca170349205df457bb0a5.vehicle',
      'namespace' => 'minishop2',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bd8b9e8d661c30e8bd6c166e6e006737',
      'native_key' => 'ms2_status_for_stat',
      'filename' => 'modSystemSetting/7c89792e5c5e0d6d6e51567406dcf083.vehicle',
      'namespace' => 'minishop2',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd2bcf83765c3226999b8909e41290bdf',
      'native_key' => 'msOnBeforeAddToCart',
      'filename' => 'modEvent/f9bcd772c0c615ab5edfbc82527f1c0b.vehicle',
      'namespace' => 'minishop2',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2428381d3d6ed74c0f629a3e78805f36',
      'native_key' => 'msOnAddToCart',
      'filename' => 'modEvent/fd3517d27c14f9c6069076c45157e4db.vehicle',
      'namespace' => 'minishop2',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '022a8201a11966d63b1f630b120c5479',
      'native_key' => 'msOnBeforeChangeInCart',
      'filename' => 'modEvent/3eb5490abc72371f9b9a41dc984ef4e4.vehicle',
      'namespace' => 'minishop2',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cf40c753f744a6775c3f3e1db9a5b928',
      'native_key' => 'msOnChangeInCart',
      'filename' => 'modEvent/274efa7c219a6600ba80e69b4130978d.vehicle',
      'namespace' => 'minishop2',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2b6b3bf0918965e5426b076c5888899d',
      'native_key' => 'msOnBeforeRemoveFromCart',
      'filename' => 'modEvent/dbbe39d63a71bbc5061faf2287a02d0a.vehicle',
      'namespace' => 'minishop2',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '84925ac1703312f418aa0ad9f55ac39c',
      'native_key' => 'msOnRemoveFromCart',
      'filename' => 'modEvent/a3bb92c117c5d6f47b9ac96cd9e17865.vehicle',
      'namespace' => 'minishop2',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '427546a2d24e550166ba54bfa9cdf8d0',
      'native_key' => 'msOnBeforeEmptyCart',
      'filename' => 'modEvent/cf5f91f4ed1e06ef94d8b9a1703a1bb5.vehicle',
      'namespace' => 'minishop2',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6f03dd9e9547efcab6cf08a3d0fb7e10',
      'native_key' => 'msOnEmptyCart',
      'filename' => 'modEvent/27c1a435ae790b04534e1ff7dceb8f87.vehicle',
      'namespace' => 'minishop2',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c7a6948762cc4331441ed1ec8efd855a',
      'native_key' => 'msOnGetStatusCart',
      'filename' => 'modEvent/996018aedf2c6ecc58edf319656d458f.vehicle',
      'namespace' => 'minishop2',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '55de8b4d31770a95705d78e98f5471ac',
      'native_key' => 'msOnBeforeAddToOrder',
      'filename' => 'modEvent/c69ba4950f7399af60d73cf09bdfd161.vehicle',
      'namespace' => 'minishop2',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '867047571507b0545796d5e66d041add',
      'native_key' => 'msOnAddToOrder',
      'filename' => 'modEvent/c11e1276344891daa6089f12ee20b75b.vehicle',
      'namespace' => 'minishop2',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '38bc4672891800760e2c31eb00fa085c',
      'native_key' => 'msOnBeforeValidateOrderValue',
      'filename' => 'modEvent/c91292b4bfe935ad4e65dda02d641b7e.vehicle',
      'namespace' => 'minishop2',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6b7346ebb81cf62f53ce2309140d6d91',
      'native_key' => 'msOnValidateOrderValue',
      'filename' => 'modEvent/3e98635330c542a3db6bafc9bcaa647b.vehicle',
      'namespace' => 'minishop2',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3465ff3a09fad36a6d316435e0f256f7',
      'native_key' => 'msOnBeforeRemoveFromOrder',
      'filename' => 'modEvent/e61c475e4f3cefd258b828d5f26e2ff2.vehicle',
      'namespace' => 'minishop2',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1d5a640f20abcfca021ae0cbaa2885d4',
      'native_key' => 'msOnRemoveFromOrder',
      'filename' => 'modEvent/3d8d69187bd6f912ece484c9b9250009.vehicle',
      'namespace' => 'minishop2',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '64ac5d79d5017762df92371261e53f3d',
      'native_key' => 'msOnBeforeEmptyOrder',
      'filename' => 'modEvent/3af5824c7d50a30b01b4cde3ff9c9f85.vehicle',
      'namespace' => 'minishop2',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '11f16789233f6f461cdab89d119c9637',
      'native_key' => 'msOnEmptyOrder',
      'filename' => 'modEvent/ee0a4166ba1b598e231126657f038158.vehicle',
      'namespace' => 'minishop2',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4ec066a4dec2b9acd8bdc87d82c4cfdd',
      'native_key' => 'msOnBeforeGetOrderCost',
      'filename' => 'modEvent/15aa4dc6fa20da6640f4573a8a87b63b.vehicle',
      'namespace' => 'minishop2',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0121f34baa36b151c5b4634bb87d2577',
      'native_key' => 'msOnGetOrderCost',
      'filename' => 'modEvent/5689bbceb63d0309b61ca064f95085b7.vehicle',
      'namespace' => 'minishop2',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b82a5758d7c5aeb0e2458fbbd6914527',
      'native_key' => 'msOnSubmitOrder',
      'filename' => 'modEvent/7617b2668f88bd5cb2143e9de3c13fcb.vehicle',
      'namespace' => 'minishop2',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'bea1cb3228566a3f09fe22d43dc90917',
      'native_key' => 'msOnBeforeChangeOrderStatus',
      'filename' => 'modEvent/68e3c373f215f5131b83a1f8aeb37d2f.vehicle',
      'namespace' => 'minishop2',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4254d5b6f6000ac1089b3ceea00fd7c3',
      'native_key' => 'msOnChangeOrderStatus',
      'filename' => 'modEvent/61fad168484b7e733d44351b4f1824a1.vehicle',
      'namespace' => 'minishop2',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f7a7e83a672120f0d4630b9ad41467ea',
      'native_key' => 'msOnBeforeGetOrderCustomer',
      'filename' => 'modEvent/3142704fddcfba4400d20719956895da.vehicle',
      'namespace' => 'minishop2',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '37c37c478c40d465acc7e9594f7711ed',
      'native_key' => 'msOnGetOrderCustomer',
      'filename' => 'modEvent/807a1ac1af71dd3e8622cdd8b86f88f5.vehicle',
      'namespace' => 'minishop2',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'be9e3e18ce4de82e3e65512782d0a5f2',
      'native_key' => 'msOnBeforeCreateOrder',
      'filename' => 'modEvent/a35b9a975b1a0b298c814184c5e7e261.vehicle',
      'namespace' => 'minishop2',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '554647e6bbcf51ae926297a8bf79c867',
      'native_key' => 'msOnBeforeMgrCreateOrder',
      'filename' => 'modEvent/00896a9421555387ace2b045692a82b7.vehicle',
      'namespace' => 'minishop2',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7a1c19fc4880c485a554563fefef92b0',
      'native_key' => 'msOnCreateOrder',
      'filename' => 'modEvent/0119eba04bd9a377f51590ba0bbbb4ab.vehicle',
      'namespace' => 'minishop2',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '771e944e5ab8fec56628defdd500919a',
      'native_key' => 'msOnMgrCreateOrder',
      'filename' => 'modEvent/3d8951ecb5e9adb5e88ed9da07a33c5c.vehicle',
      'namespace' => 'minishop2',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '68d1c6e6014ef3aadfe5a13ff65d79a3',
      'native_key' => 'msOnBeforeUpdateOrder',
      'filename' => 'modEvent/5b9d96fbc9b7f470910460212648c2ba.vehicle',
      'namespace' => 'minishop2',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '16e48f971cee5449ae9a0dca93d3c4b6',
      'native_key' => 'msOnUpdateOrder',
      'filename' => 'modEvent/b467de08a59192e49b933e7bfcbb9a39.vehicle',
      'namespace' => 'minishop2',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '54dd861520d38eba7aee03f22b0dbb73',
      'native_key' => 'msOnBeforeSaveOrder',
      'filename' => 'modEvent/6e275fc69de961ea0ccf58117d78f127.vehicle',
      'namespace' => 'minishop2',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '9003b326be875ee4242a64848e6069c6',
      'native_key' => 'msOnSaveOrder',
      'filename' => 'modEvent/b4a50141ef6846e291864b2502da845d.vehicle',
      'namespace' => 'minishop2',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '48f98756993466aba6379609bed443b3',
      'native_key' => 'msOnBeforeRemoveOrder',
      'filename' => 'modEvent/ab7fadc195d5bd3ea3d11b963d791e58.vehicle',
      'namespace' => 'minishop2',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '16454e37b9a00b0b606ff5528dfc6f71',
      'native_key' => 'msOnRemoveOrder',
      'filename' => 'modEvent/463797e804554eb56f35243532416fe7.vehicle',
      'namespace' => 'minishop2',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6d528a1d189cc5aebb42c54106596b50',
      'native_key' => 'msOnBeforeCreateOrderProduct',
      'filename' => 'modEvent/1e2d211c6dbc2e998764eed976d4c24d.vehicle',
      'namespace' => 'minishop2',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6103928d1fd6014179dc42a3a2408ad4',
      'native_key' => 'msOnCreateOrderProduct',
      'filename' => 'modEvent/a42d9a93e7225630df31cc7e25b2bdbf.vehicle',
      'namespace' => 'minishop2',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f0573e46e9992878d70498f0e1d1d599',
      'native_key' => 'msOnBeforeUpdateOrderProduct',
      'filename' => 'modEvent/55e25fac2f594f65cb1ea8d84bcfeef8.vehicle',
      'namespace' => 'minishop2',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8e11add6c66d161526f7b9e35c049457',
      'native_key' => 'msOnUpdateOrderProduct',
      'filename' => 'modEvent/c9862ea4938e6cf97362fb1394a869e7.vehicle',
      'namespace' => 'minishop2',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd82a360628da65d52255b5f23eb07d9d',
      'native_key' => 'msOnBeforeRemoveOrderProduct',
      'filename' => 'modEvent/c2b1c9a11d25375922769951b0fa548e.vehicle',
      'namespace' => 'minishop2',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '11e7304c9d70eace8d0c1d2020a23290',
      'native_key' => 'msOnRemoveOrderProduct',
      'filename' => 'modEvent/25e976ed98647dbe88a511c92713870c.vehicle',
      'namespace' => 'minishop2',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '44dfcf878c0bcf62fb7f1e8a2e61d92b',
      'native_key' => 'msOnGetProductPrice',
      'filename' => 'modEvent/cc7e5acd99668b7d2528406e9610ea10.vehicle',
      'namespace' => 'minishop2',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a04c35f25b699242c422a69db6c1d073',
      'native_key' => 'msOnGetProductWeight',
      'filename' => 'modEvent/fc2e34acc761d80972307dc4677add41.vehicle',
      'namespace' => 'minishop2',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '129c76acfca3ce6b463ded83e160bdf8',
      'native_key' => 'msOnGetProductFields',
      'filename' => 'modEvent/5bfb539a6e7a852155cd4898fe68e6c9.vehicle',
      'namespace' => 'minishop2',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd536cea35cd1aaf3008c26190bba63b9',
      'native_key' => 'msOnManagerCustomCssJs',
      'filename' => 'modEvent/2c12439672cfbf8f21ea29e8bddcce4e.vehicle',
      'namespace' => 'minishop2',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => 'fd78d8c750a9da47db527aba38eaf47b',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/ac7a0e1e1edb1a243d9e1fab52c99f0b.vehicle',
      'namespace' => 'minishop2',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '3c69cc0af35bff7ddeee7ce966553018',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/c76fd532060620902453c54e1d9ce9b6.vehicle',
      'namespace' => 'minishop2',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '489a53656969b533c7b60ada7ef11600',
      'native_key' => 'minishop2',
      'filename' => 'modMenu/571e38aa84da8b3e180ffef6f23f4ea2.vehicle',
      'namespace' => 'minishop2',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '1f813b43d88c451ff08f7d6789362259',
      'native_key' => 'ms2_orders',
      'filename' => 'modMenu/0f47349040e4d757c8c98c10c0540268.vehicle',
      'namespace' => 'minishop2',
    ),
    118 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '5ae00339bc9dc3528e8053d5923c2755',
      'native_key' => 'ms2_settings',
      'filename' => 'modMenu/7f81a406368c59138e5f28c63f878cbc.vehicle',
      'namespace' => 'minishop2',
    ),
    119 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '26958af64fc6c4217b0bd3772f7fa503',
      'native_key' => 'ms2_system_settings',
      'filename' => 'modMenu/95986300557cca3d758e0eba495b4de3.vehicle',
      'namespace' => 'minishop2',
    ),
    120 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ecf9dac4a3bc88fa2766d433f1f3da54',
      'native_key' => 1,
      'filename' => 'modCategory/cf41cceb34083e94b9437966b85391e8.vehicle',
      'namespace' => 'minishop2',
    ),
  ),
);