<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => '# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
    'setup-options' => 'minishop2-4.1.3-pl/setup-options.php',
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
      'guid' => 'bc9444ccc48a8addef737ee9babbe350',
      'native_key' => 'minishop2',
      'filename' => 'modNamespace/b9b9a65ad9097775c693d00f935f729d.vehicle',
      'namespace' => 'minishop2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1a9c59288533f6ff247f345ecf047dbc',
      'native_key' => 'mgr_tree_icon_mscategory',
      'filename' => 'modSystemSetting/daae03a37812683071885fab6e77a886.vehicle',
      'namespace' => 'minishop2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '467d50d221f2d097e97be726c05a898a',
      'native_key' => 'mgr_tree_icon_msproduct',
      'filename' => 'modSystemSetting/5c63d30ace6f9f6adcffa90ae4197a0d.vehicle',
      'namespace' => 'minishop2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '14ff6eb154960dc9fa3114c493cb2380',
      'native_key' => 'ms2_services',
      'filename' => 'modSystemSetting/1a3a437d91e95462687e7529b4a1ea9a.vehicle',
      'namespace' => 'minishop2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd4c53c74859ed53fb3c457abb4d431df',
      'native_key' => 'ms2_plugins',
      'filename' => 'modSystemSetting/999d9d9a61f1bc9684db6718a2445ba6.vehicle',
      'namespace' => 'minishop2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '171e8624e8087e5221e0eb5aeacd2dea',
      'native_key' => 'ms2_chunks_categories',
      'filename' => 'modSystemSetting/e068b497bdf60be8e98cb7b4155e9ad5.vehicle',
      'namespace' => 'minishop2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fcb2469e4b9788f2b3ff36ba866813b9',
      'native_key' => 'ms2_tmp_storage',
      'filename' => 'modSystemSetting/93f70ccf039121c0adcd0bad3affa3b6.vehicle',
      'namespace' => 'minishop2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '638151fe944795c5741fe3e66d294377',
      'native_key' => 'ms2_use_scheduler',
      'filename' => 'modSystemSetting/4512bee050df2157cd210f9db0f17a0f.vehicle',
      'namespace' => 'minishop2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cdef75f45d3a35cb68f5683ef202dea0',
      'native_key' => 'ms2_category_grid_fields',
      'filename' => 'modSystemSetting/df67f1942cd684dcdcf1a84070e5e37f.vehicle',
      'namespace' => 'minishop2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b357b12142aa9ff0bd71c09b6aa345b1',
      'native_key' => 'ms2_category_show_nested_products',
      'filename' => 'modSystemSetting/5fc23ed595283eba54ab9cd8677cfe37.vehicle',
      'namespace' => 'minishop2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65e3b7a09760d20fae8d7245945d9263',
      'native_key' => 'ms2_category_show_comments',
      'filename' => 'modSystemSetting/7f034d2d4fe07c022510da546fcfa7c8.vehicle',
      'namespace' => 'minishop2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5b6f04db2b8a960e6adfe6096da200f8',
      'native_key' => 'ms2_category_show_options',
      'filename' => 'modSystemSetting/96c108ce85006ef965a0fb63b0b21972.vehicle',
      'namespace' => 'minishop2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '638b243e7451f5c248a867b9d962e86b',
      'native_key' => 'ms2_category_remember_tabs',
      'filename' => 'modSystemSetting/d27b579c4fcfd1dc17c16ada3e5ae268.vehicle',
      'namespace' => 'minishop2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '26836d3377b519745aaadec1bff26c64',
      'native_key' => 'ms2_category_id_as_alias',
      'filename' => 'modSystemSetting/25e27b2197e5a1f76b13aa54bf1ab589.vehicle',
      'namespace' => 'minishop2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '64449b482b910b7339b6ca3995f40675',
      'native_key' => 'ms2_category_content_default',
      'filename' => 'modSystemSetting/2d92b1d01b90bca203cfd880357420d5.vehicle',
      'namespace' => 'minishop2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c861638f48b9403a22615e5738b9d824',
      'native_key' => 'ms2_template_category_default',
      'filename' => 'modSystemSetting/f875df0a7a6b5f57526877ad22352ed0.vehicle',
      'namespace' => 'minishop2',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b25e34b7922cd57611a811240cc719c2',
      'native_key' => 'ms2_product_extra_fields',
      'filename' => 'modSystemSetting/4c6edfe69a8daa3652cf595a8f686d11.vehicle',
      'namespace' => 'minishop2',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c2114978460fa15136a81e51c68360f',
      'native_key' => 'ms2_product_show_comments',
      'filename' => 'modSystemSetting/9a465ccdd0e20d59686972596f3d9394.vehicle',
      'namespace' => 'minishop2',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bfe13ff894f7100327e54179a52fe87e',
      'native_key' => 'ms2_template_product_default',
      'filename' => 'modSystemSetting/327d818c5c9ffc9f2d3d896e7f219ad2.vehicle',
      'namespace' => 'minishop2',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cde36c4cdb39f88d88bc3553af0f66f8',
      'native_key' => 'ms2_product_show_in_tree_default',
      'filename' => 'modSystemSetting/73477dcf25b2673c0c7cb5445130520b.vehicle',
      'namespace' => 'minishop2',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c2d07b3815b731b9c113ecb902e1f06d',
      'native_key' => 'ms2_product_source_default',
      'filename' => 'modSystemSetting/a872bf4f9f0e063b87631eaf7f2c9299.vehicle',
      'namespace' => 'minishop2',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5cc4bd5a392f206e1890ee6b69fcc87b',
      'native_key' => 'ms2_product_thumbnail_default',
      'filename' => 'modSystemSetting/9348fb11fd3819c6537d3ab40d80636b.vehicle',
      'namespace' => 'minishop2',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e2eeb49938cd81ca5964f1276705f604',
      'native_key' => 'ms2_product_thumbnail_size',
      'filename' => 'modSystemSetting/65b0384feb9ce4d30a63aea85d046081.vehicle',
      'namespace' => 'minishop2',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a9315b45e7459135cd080bf1cc1a3783',
      'native_key' => 'ms2_product_remember_tabs',
      'filename' => 'modSystemSetting/46543182d51c1a71395325ad40e64039.vehicle',
      'namespace' => 'minishop2',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '91fb7d51999723dff13ff546eaeb5a7a',
      'native_key' => 'ms2_product_id_as_alias',
      'filename' => 'modSystemSetting/1d8ad6ffb2d66dcd6ee630637c1c91c1.vehicle',
      'namespace' => 'minishop2',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '066946d2fdb9d4e29e689f648ddfad08',
      'native_key' => 'ms2_price_format',
      'filename' => 'modSystemSetting/cc129c1b6181c5ce9ea5147abc8275ef.vehicle',
      'namespace' => 'minishop2',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9145ffe64f46cfd6b354bfb99925d32a',
      'native_key' => 'ms2_weight_format',
      'filename' => 'modSystemSetting/043cc839134abcb55049abae8767cbe7.vehicle',
      'namespace' => 'minishop2',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '453a347a14160b3dc351b95ea709098a',
      'native_key' => 'ms2_price_format_no_zeros',
      'filename' => 'modSystemSetting/19edb6ee4c109bce8b92e64bc783c2f0.vehicle',
      'namespace' => 'minishop2',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '31a17377f1a92d452214d786e3340d49',
      'native_key' => 'ms2_weight_format_no_zeros',
      'filename' => 'modSystemSetting/dc9de957b90a3f029b3d18371e693c7f.vehicle',
      'namespace' => 'minishop2',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e611384eb348ddb0f4807bb11770ffea',
      'native_key' => 'ms2_product_tab_extra',
      'filename' => 'modSystemSetting/734a228d3209d7247213ccd28ac828d8.vehicle',
      'namespace' => 'minishop2',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bf7cc06d804a71a284819ea9c962acfd',
      'native_key' => 'ms2_product_tab_gallery',
      'filename' => 'modSystemSetting/e87f0216b9d46c1874511e8b7e6645a5.vehicle',
      'namespace' => 'minishop2',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4fbb6eb5191951af5e0c853e8177178a',
      'native_key' => 'ms2_product_tab_links',
      'filename' => 'modSystemSetting/228b259cde6fc9c341befef19f7a8da3.vehicle',
      'namespace' => 'minishop2',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b7e58d08ba6c7ddd9c96f9813ea78da',
      'native_key' => 'ms2_product_tab_options',
      'filename' => 'modSystemSetting/0fb0b23e6e68dca70368e83f6ccc23ca.vehicle',
      'namespace' => 'minishop2',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '77c35e13da86ca406ae5bace2e36e149',
      'native_key' => 'ms2_product_tab_categories',
      'filename' => 'modSystemSetting/b0ef454f39e5e8e1501a871e547c04ec.vehicle',
      'namespace' => 'minishop2',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '22cc2af146b82635b784aa6d44787975',
      'native_key' => 'ms2_cart_handler_class',
      'filename' => 'modSystemSetting/d11d682fb01414987a7215fba4ff3233.vehicle',
      'namespace' => 'minishop2',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cd18627940eb3152812090b415c34d9a',
      'native_key' => 'ms2_cart_context',
      'filename' => 'modSystemSetting/21358429a1fbc08760d2c388ceba3e7f.vehicle',
      'namespace' => 'minishop2',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '21da1063935b5f03b135ee2509d16c52',
      'native_key' => 'ms2_cart_max_count',
      'filename' => 'modSystemSetting/6afbc272cddb363020429b5d8324d034.vehicle',
      'namespace' => 'minishop2',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fa6a771ed2cc39a2ff7667023f70d562',
      'native_key' => 'ms2_order_format_num',
      'filename' => 'modSystemSetting/20c229d90da465551b3f8d51eaea002a.vehicle',
      'namespace' => 'minishop2',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9bb142dc907b44080a31c6a4fbae4b6a',
      'native_key' => 'ms2_order_format_num_separator',
      'filename' => 'modSystemSetting/33e597346d50dff6bbbddcebc6a0a09f.vehicle',
      'namespace' => 'minishop2',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f0015e67aeae3df1c7efadf26d6f2ed0',
      'native_key' => 'ms2_order_grid_fields',
      'filename' => 'modSystemSetting/3c22b307da6f308ca1e2eb0766773324.vehicle',
      'namespace' => 'minishop2',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e8987995cb41e6c6faf9559e95e798ae',
      'native_key' => 'ms2_order_address_fields',
      'filename' => 'modSystemSetting/bef702c27af4f0f7110e118ce5bb5a96.vehicle',
      'namespace' => 'minishop2',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7910e00b22efe732eef3de515770639c',
      'native_key' => 'ms2_order_product_fields',
      'filename' => 'modSystemSetting/3b11e29884a23aef51e477bda77727d6.vehicle',
      'namespace' => 'minishop2',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '65650b0b238f659ef2259942a64db09c',
      'native_key' => 'ms2_order_product_options',
      'filename' => 'modSystemSetting/f304f27aeed96e7f62f82fd3514bcf1e.vehicle',
      'namespace' => 'minishop2',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dab9af57faed46b5ec22e26ee829a3b9',
      'native_key' => 'ms2_order_handler_class',
      'filename' => 'modSystemSetting/65c5b3704c720277c40bf983841fb6c7.vehicle',
      'namespace' => 'minishop2',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a69162713e6f48cb4676bedee024f7d1',
      'native_key' => 'ms2_order_user_groups',
      'filename' => 'modSystemSetting/f263802c305ac1cfacb1a70c47949041.vehicle',
      'namespace' => 'minishop2',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fdf6259c76918a17c0aa6dee60dab7f7',
      'native_key' => 'ms2_date_format',
      'filename' => 'modSystemSetting/e8929a1559c0d3b55e7fbcb865c67012.vehicle',
      'namespace' => 'minishop2',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5cd49769b8c2a7fcbd89d2e86346695e',
      'native_key' => 'ms2_email_manager',
      'filename' => 'modSystemSetting/4133efa148f14d7ffdbed631db07ad29.vehicle',
      'namespace' => 'minishop2',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a58b065b49276a2644d9b7a5cdc6731e',
      'native_key' => 'ms2_frontend_css',
      'filename' => 'modSystemSetting/d24f5df0b75d5f257a45a764eecececb.vehicle',
      'namespace' => 'minishop2',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '51dde4d151e84449cce788b0698d968f',
      'native_key' => 'ms2_frontend_message_css',
      'filename' => 'modSystemSetting/662ef429d49bf99df3b635524fd2b0c9.vehicle',
      'namespace' => 'minishop2',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '82cbd7dbe08b5b54f007ad736ef9bdd9',
      'native_key' => 'ms2_frontend_js',
      'filename' => 'modSystemSetting/40f90a7704978f7d1a859da2fe7b0d6a.vehicle',
      'namespace' => 'minishop2',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a1f542a8831f013a18dbec64c1b51818',
      'native_key' => 'ms2_frontend_message_js',
      'filename' => 'modSystemSetting/32ccaa24d1ee97f3fac647b82f09b8ba.vehicle',
      'namespace' => 'minishop2',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a089f29cb37f2070507d360146eed1ed',
      'native_key' => 'ms2_frontend_message_js_settings',
      'filename' => 'modSystemSetting/24fdf8cc57ee29230a0c621905b4bebb.vehicle',
      'namespace' => 'minishop2',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad19d40f5d292d8cfb2ab95687ae1ce9',
      'native_key' => 'ms2_register_frontend',
      'filename' => 'modSystemSetting/2e79c74d0efd2047fd36d374c6a957cf.vehicle',
      'namespace' => 'minishop2',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '61a1e105f7c2afc8571f40b749dda963',
      'native_key' => 'ms2_toggle_js_type',
      'filename' => 'modSystemSetting/5951b9fbff165b1953ee16f141ea6380.vehicle',
      'namespace' => 'minishop2',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '66fcb6f12ebe1cbb02541d4491ed7a5c',
      'native_key' => 'ms2_vanila_js',
      'filename' => 'modSystemSetting/f057910c374eb215a422f15314cd54f6.vehicle',
      'namespace' => 'minishop2',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00d048ce54bb703c01784ba7546361fe',
      'native_key' => 'ms2_frontend_notify_js_settings',
      'filename' => 'modSystemSetting/ccee1953f21927f7f461b08805934e4b.vehicle',
      'namespace' => 'minishop2',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '41e7e339a237f2a5ac11d473d681c34f',
      'native_key' => 'ms2_cart_js_class_path',
      'filename' => 'modSystemSetting/91b6274f2fb73b11bfafb4d79676a9a2.vehicle',
      'namespace' => 'minishop2',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dc0c60093ef1b18cb8cbb3ec67027409',
      'native_key' => 'ms2_cart_js_class_name',
      'filename' => 'modSystemSetting/a1f3872e019de9b54c3b631fdecbcb29.vehicle',
      'namespace' => 'minishop2',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd3209432937a153253c3a5b323c5b2f0',
      'native_key' => 'ms2_order_js_class_path',
      'filename' => 'modSystemSetting/7b5b39dc6d117a6bd2fbfc48593976aa.vehicle',
      'namespace' => 'minishop2',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0101ead2291f36e26ac6c5f11e666654',
      'native_key' => 'ms2_order_js_class_name',
      'filename' => 'modSystemSetting/84266f3e9eafffe7f389a9570448ed67.vehicle',
      'namespace' => 'minishop2',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '418fcf4abf526669e76f696f97176af6',
      'native_key' => 'ms2_notify_js_class_path',
      'filename' => 'modSystemSetting/8b97d7476ee5354d98ca61d20a76ce7e.vehicle',
      'namespace' => 'minishop2',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8e8c651b57e9cc0f22d856d662597a69',
      'native_key' => 'ms2_notify_js_class_name',
      'filename' => 'modSystemSetting/aaaf3c5c66112710c18e447566d7a427.vehicle',
      'namespace' => 'minishop2',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f12ab9d54c77ae3e943600c543f6294c',
      'native_key' => 'ms2_status_draft',
      'filename' => 'modSystemSetting/93bb6f03dc5918cfa71a6b233df1a29b.vehicle',
      'namespace' => 'minishop2',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f98a90e32fca9744d1663fd8bc5fe35e',
      'native_key' => 'ms2_status_new',
      'filename' => 'modSystemSetting/0097ac3be0b2e023861c4fd43c208248.vehicle',
      'namespace' => 'minishop2',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ec406dd80707af1d880b83997b1c5c16',
      'native_key' => 'ms2_status_paid',
      'filename' => 'modSystemSetting/9c75bb955901e915742b55c77fecfe1d.vehicle',
      'namespace' => 'minishop2',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9686ebc1587c36262789c92038156c05',
      'native_key' => 'ms2_status_canceled',
      'filename' => 'modSystemSetting/376bd9729c37a505295d7f022d6d0667.vehicle',
      'namespace' => 'minishop2',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7bbeb1a46b69850f0a85d0d1f52f171',
      'native_key' => 'ms2_status_for_stat',
      'filename' => 'modSystemSetting/84443f7a9cb25de1785e18605fe8ddca.vehicle',
      'namespace' => 'minishop2',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e540878b28f33a0d79894c64588f0e25',
      'native_key' => 'msOnBeforeAddToCart',
      'filename' => 'modEvent/afaf2ccd6fb617e44392d40a45fa7c52.vehicle',
      'namespace' => 'minishop2',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b2805dceb84ba0fbb0e37ff40a41f654',
      'native_key' => 'msOnAddToCart',
      'filename' => 'modEvent/fc0ff2368abf503317c4f50a3fa2316a.vehicle',
      'namespace' => 'minishop2',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f804a3abb324c242181b5a762b561333',
      'native_key' => 'msOnBeforeChangeInCart',
      'filename' => 'modEvent/a49ce54718c7002e94fd0aa30966069e.vehicle',
      'namespace' => 'minishop2',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a271cd58be5bc0122fe2e6cb7229ede8',
      'native_key' => 'msOnChangeInCart',
      'filename' => 'modEvent/77132cb3c397f5d36b277f4b258887d9.vehicle',
      'namespace' => 'minishop2',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3461aa10651cefb93efb72d69b9cd87f',
      'native_key' => 'msOnBeforeRemoveFromCart',
      'filename' => 'modEvent/6030d2ea99ff2ada2126f4a942cfd9d1.vehicle',
      'namespace' => 'minishop2',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0612b6c52737cc4ca23c582fc4826c53',
      'native_key' => 'msOnRemoveFromCart',
      'filename' => 'modEvent/48337c1b6200c107c637050f917c45eb.vehicle',
      'namespace' => 'minishop2',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '95cbe923c3cde8ae509d91c79e243b75',
      'native_key' => 'msOnBeforeEmptyCart',
      'filename' => 'modEvent/2f6294e20c2deb62ed09bcb418564adb.vehicle',
      'namespace' => 'minishop2',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b4fbedadc2331a7dc25ae68f6578ee46',
      'native_key' => 'msOnEmptyCart',
      'filename' => 'modEvent/e857dc5b6fbe0a34303e0331c8e5b6b5.vehicle',
      'namespace' => 'minishop2',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd4a41bbd561d564d75f269b65999aa0b',
      'native_key' => 'msOnGetStatusCart',
      'filename' => 'modEvent/8dd62394ede265a3128566c215c4e5e4.vehicle',
      'namespace' => 'minishop2',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e9fc306e826b720b3c1fb8d63c72829f',
      'native_key' => 'msOnBeforeAddToOrder',
      'filename' => 'modEvent/f4b8d63a888f7e47706c32da47b8ac5f.vehicle',
      'namespace' => 'minishop2',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b7cfba2add95a261df4adaa414e06898',
      'native_key' => 'msOnAddToOrder',
      'filename' => 'modEvent/0e160adacbc93cb5fbcabeaca22222e2.vehicle',
      'namespace' => 'minishop2',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a2f412a405a0704a01be759380aa4ee2',
      'native_key' => 'msOnBeforeValidateOrderValue',
      'filename' => 'modEvent/a81fb9f7629df122b39fdac991f394c7.vehicle',
      'namespace' => 'minishop2',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2727dc21ff672901afd824f4aaab5ffe',
      'native_key' => 'msOnValidateOrderValue',
      'filename' => 'modEvent/f8074b96356216f83296791a3dcc26f8.vehicle',
      'namespace' => 'minishop2',
    ),
    80 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '93bf9062b98d789d5b092ea5dd6741d8',
      'native_key' => 'msOnBeforeRemoveFromOrder',
      'filename' => 'modEvent/2f9d0bb7d606d5f6834d3632f8d30246.vehicle',
      'namespace' => 'minishop2',
    ),
    81 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '439c5492c4d034cdc785b2d727b7d37c',
      'native_key' => 'msOnRemoveFromOrder',
      'filename' => 'modEvent/3ccaf94c9aed77331912bea2c56c72f5.vehicle',
      'namespace' => 'minishop2',
    ),
    82 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e8498ed996db834e682b009ed80f8c48',
      'native_key' => 'msOnBeforeEmptyOrder',
      'filename' => 'modEvent/3499c836965ffdfe1954a0d3f4be0820.vehicle',
      'namespace' => 'minishop2',
    ),
    83 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c84cad6263a17f142b589b11e9b94aa3',
      'native_key' => 'msOnEmptyOrder',
      'filename' => 'modEvent/9c23ccf11935d0e22269c0165ac0e960.vehicle',
      'namespace' => 'minishop2',
    ),
    84 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '26b154330e330f5c137a444c0d070847',
      'native_key' => 'msOnBeforeGetOrderCost',
      'filename' => 'modEvent/0ed6712d24fffc50b115862f54b936bb.vehicle',
      'namespace' => 'minishop2',
    ),
    85 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '68ceffa4e6036675787e53f790418694',
      'native_key' => 'msOnGetOrderCost',
      'filename' => 'modEvent/9819d91fb14429c08502762420b7c322.vehicle',
      'namespace' => 'minishop2',
    ),
    86 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a1fe5edf045d7f20196363287eaba59d',
      'native_key' => 'msOnSubmitOrder',
      'filename' => 'modEvent/21f7d99c8b9907a364479fcb05dcedf5.vehicle',
      'namespace' => 'minishop2',
    ),
    87 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ed58bf3df69d2f238943b386d46c04e2',
      'native_key' => 'msOnBeforeChangeOrderStatus',
      'filename' => 'modEvent/1ed60c7c22d57da1b94df3118c4becc5.vehicle',
      'namespace' => 'minishop2',
    ),
    88 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0bfd03eae25cb960f9357733b10c2a6a',
      'native_key' => 'msOnChangeOrderStatus',
      'filename' => 'modEvent/0925df1f9dcdda2fe137e46ba8d59110.vehicle',
      'namespace' => 'minishop2',
    ),
    89 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '34931c8df3b81c2d28e1a93b8027a543',
      'native_key' => 'msOnBeforeGetOrderCustomer',
      'filename' => 'modEvent/286c5a930b5c4b74e8dba5a95341d0db.vehicle',
      'namespace' => 'minishop2',
    ),
    90 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cf06c22e7c14ab768d66d0b1bcce5903',
      'native_key' => 'msOnGetOrderCustomer',
      'filename' => 'modEvent/5c8fd04704a4e66892f2191e263c6cc3.vehicle',
      'namespace' => 'minishop2',
    ),
    91 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a48f4515d8d0d06682a585f8d36c6f0d',
      'native_key' => 'msOnBeforeCreateOrder',
      'filename' => 'modEvent/0566b38dbd7514c8c5ba4cd86baa1c66.vehicle',
      'namespace' => 'minishop2',
    ),
    92 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1b2e93d0f6bdc373424a524d611feda2',
      'native_key' => 'msOnBeforeMgrCreateOrder',
      'filename' => 'modEvent/4b63b1c5137ff12fa88863f362d68abb.vehicle',
      'namespace' => 'minishop2',
    ),
    93 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '78fd9a6eb4da3b8bbd2b621debf4107a',
      'native_key' => 'msOnCreateOrder',
      'filename' => 'modEvent/9aaf1ec44df580c3caf781f0fe93156a.vehicle',
      'namespace' => 'minishop2',
    ),
    94 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '882881c8ab11822b03c73b72cc9e5079',
      'native_key' => 'msOnMgrCreateOrder',
      'filename' => 'modEvent/ba2fa27ffbdbd70a1edf1531d84c2735.vehicle',
      'namespace' => 'minishop2',
    ),
    95 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '22312a5a92b8fc916d05bad3051f8f2e',
      'native_key' => 'msOnBeforeUpdateOrder',
      'filename' => 'modEvent/707b37dbe6d777433a04f42bcf057d6b.vehicle',
      'namespace' => 'minishop2',
    ),
    96 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2d600da9123a8acce60e6974e40c2a56',
      'native_key' => 'msOnUpdateOrder',
      'filename' => 'modEvent/ef8148bf5587041e053d4e981ba657d2.vehicle',
      'namespace' => 'minishop2',
    ),
    97 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '5fb017aba53175e7a18669b1dcf66600',
      'native_key' => 'msOnBeforeSaveOrder',
      'filename' => 'modEvent/8a35f14a1c7f01826de5b858385fec19.vehicle',
      'namespace' => 'minishop2',
    ),
    98 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f259396bdd0eee623ec5cdae3d969253',
      'native_key' => 'msOnSaveOrder',
      'filename' => 'modEvent/a2244c6fa452ab95ba03a6b76ef5cd9e.vehicle',
      'namespace' => 'minishop2',
    ),
    99 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '46313880f19eb64676242cab54d7c64a',
      'native_key' => 'msOnBeforeRemoveOrder',
      'filename' => 'modEvent/cfac3699fec62c5496f130c5997729b3.vehicle',
      'namespace' => 'minishop2',
    ),
    100 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4108c8965b49820b3f4dfc3118003a26',
      'native_key' => 'msOnRemoveOrder',
      'filename' => 'modEvent/e46207ee961375dd84225983861276bf.vehicle',
      'namespace' => 'minishop2',
    ),
    101 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '14aa7f4076eedb8d331e87b95065431c',
      'native_key' => 'msOnBeforeCreateOrderProduct',
      'filename' => 'modEvent/ddb40e025aa4f7b71799a33d74913dfb.vehicle',
      'namespace' => 'minishop2',
    ),
    102 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b18fcda95c38a93814d60d6ddcb35085',
      'native_key' => 'msOnCreateOrderProduct',
      'filename' => 'modEvent/31f1a38735a50f82ff4c8821a01fc9b7.vehicle',
      'namespace' => 'minishop2',
    ),
    103 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c0257f31339b369fb249eb0cb22008ad',
      'native_key' => 'msOnBeforeUpdateOrderProduct',
      'filename' => 'modEvent/ce6656e95feb385486c6235e94a40232.vehicle',
      'namespace' => 'minishop2',
    ),
    104 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b0d2a4f3c0e9232b5ca7c91851e9e219',
      'native_key' => 'msOnUpdateOrderProduct',
      'filename' => 'modEvent/4fcdcacd0aac8743c75898f05e158119.vehicle',
      'namespace' => 'minishop2',
    ),
    105 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3dfe6a799a6cc863e6939cad6693d99c',
      'native_key' => 'msOnBeforeRemoveOrderProduct',
      'filename' => 'modEvent/a3c68ec507bda89197c19b11f0ea83c0.vehicle',
      'namespace' => 'minishop2',
    ),
    106 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0700edfaf4b8f9ea05e11fa37717cf52',
      'native_key' => 'msOnRemoveOrderProduct',
      'filename' => 'modEvent/2a41316dabaafde45e4af6608eef3c63.vehicle',
      'namespace' => 'minishop2',
    ),
    107 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1ebf10679b44eea101033a40ca92bedb',
      'native_key' => 'msOnGetProductPrice',
      'filename' => 'modEvent/14fe14288a60a8858c23e62321c9c5cd.vehicle',
      'namespace' => 'minishop2',
    ),
    108 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '19fc6833a7f2fc364b77b01eafcc216f',
      'native_key' => 'msOnGetProductWeight',
      'filename' => 'modEvent/c96624fe14515e058a80a415de6c2d50.vehicle',
      'namespace' => 'minishop2',
    ),
    109 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c0854368b4bb6b38ac40fad81d64f0f0',
      'native_key' => 'msOnGetProductFields',
      'filename' => 'modEvent/6d5a25461408e056006528601a317564.vehicle',
      'namespace' => 'minishop2',
    ),
    110 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8c5cc3bea193f32270860d515494bfdf',
      'native_key' => 'msOnManagerCustomCssJs',
      'filename' => 'modEvent/5eed2b0e37e035a19dc9d207171bed9b.vehicle',
      'namespace' => 'minishop2',
    ),
    111 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '126e29073e486c68813a475b928d5818',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/33d104ea632ab126b2f5fa2849a080e4.vehicle',
      'namespace' => 'minishop2',
    ),
    112 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '1e7cf8a9cdfa757735c27e215028e120',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/9ac0c9f8e57ada1ff24a76bd90f4e77a.vehicle',
      'namespace' => 'minishop2',
    ),
    113 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '282f08d8e634e7fb17576016486dc7f9',
      'native_key' => 'minishop2',
      'filename' => 'modMenu/32d5e3157e9fdc70ad846a0d9b4718fb.vehicle',
      'namespace' => 'minishop2',
    ),
    114 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '72979e01da953ec89f2a6648824fc935',
      'native_key' => 'ms2_orders',
      'filename' => 'modMenu/b38b72908d47fab63c8a61107d3cf031.vehicle',
      'namespace' => 'minishop2',
    ),
    115 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'e1bd270e44268655ca217665b2c82947',
      'native_key' => 'ms2_settings',
      'filename' => 'modMenu/2ffa0768f91c8b1137b5b9a79c37d5c9.vehicle',
      'namespace' => 'minishop2',
    ),
    116 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'bca25d10aed11abbb47365ba6f2a5236',
      'native_key' => 'ms2_system_settings',
      'filename' => 'modMenu/00b175d6e5f052c4e71d50096b2ead1b.vehicle',
      'namespace' => 'minishop2',
    ),
    117 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '0c97d43131df2f87b9b335332a11d1c8',
      'native_key' => 1,
      'filename' => 'modCategory/5cffa09efde75eec8bdcde4089fa17f4.vehicle',
      'namespace' => 'minishop2',
    ),
  ),
);