---
title: "develop"
weight: 1
---

# Known bugs (34 campaigns / 42 issues)
* **[tests/UI/campaigns/audit/BO/06_statistics.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/audit/BO/06_statistics.ts)** :
  * [PrestaShop#37520 : Stats > Newsletter : `Uncaught TypeError: e is undefined`](https://github.com/PrestaShop/PrestaShop/issues/37520)
  * [PrestaShop#37521 : Stats > Sales and orders : `Uncaught TypeError: e is undefined`](https://github.com/PrestaShop/PrestaShop/issues/37521)
* **[tests/UI/campaigns/functional/API/02_checkEndpoints.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_checkEndpoints.ts)** :
  * [PrestaShop#38784 : Delete / list / tests discounts](https://github.com/PrestaShop/PrestaShop/issues/38784)
  * [PrestaShop#38647 : GET & POST endpoints for each type](https://github.com/PrestaShop/PrestaShop/issues/38647)
* **[tests/UI/campaigns/functional/API/02_endpoints/03_hook/01_putHookStatusId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_hook/01_putHookStatusId.ts)** :
  * [PrestaShop#34507 : API : Endpoint `PUT /api/hook-status` - Issues Doc Swagger & Enpoint format ](https://github.com/PrestaShop/PrestaShop/issues/34507)
* **[tests/UI/campaigns/functional/API/02_endpoints/03_hook/02_getHooks.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_hook/02_getHooks.ts)** :
  * [PrestaShop#35616 : Endpoint /api/hooks & List of Hooks : Incorrect count of hooks](https://github.com/PrestaShop/PrestaShop/issues/35616)
* **[tests/UI/campaigns/functional/API/02_endpoints/06_product/08_patchProductId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_product/08_patchProductId.ts)** :
  * [PrestaShop#38787 : API : Endpoint `PATCH /product/{productId}` : Field `availableDate` : Can't use a datetime](https://github.com/PrestaShop/PrestaShop/issues/38787)
  * [PrestaShop#38788 : API : Endpoint `PATCH /product/{productId}` : Field `ean13` : Field not in response or redundant](https://github.com/PrestaShop/PrestaShop/issues/38788)
* **[tests/UI/campaigns/functional/API/02_endpoints/06_product/10_getProductsSearch.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_product/10_getProductsSearch.ts)** :
  * [PrestaShop#34486 : The APIDoc TryItOut for `/api/products/search/{phrase}/{resultsLimit}/{isoCode}` doesn't work - Enpoint Issue](https://github.com/PrestaShop/PrestaShop/issues/34486)
* **[tests/UI/campaigns/functional/BO/01_dashboard/02_activityOverview.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/01_dashboard/02_activityOverview.ts)** :
  * [PrestaShop#37033 : BO - dashactivity - module can't be SAVED properly](https://github.com/PrestaShop/PrestaShop/issues/37033)
* **[tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/11_checkInvoice.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/11_checkInvoice.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/BO/03_catalog/01_products/22_bulkActionsEnableDisable3DotsButton.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/22_bulkActionsEnableDisable3DotsButton.ts)** :
  * [PrestaShop#34191 : Preview Disabled Product & Multiples languages ](https://github.com/PrestaShop/PrestaShop/issues/34191)
* **[tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/03_actions/04_applyDiscountAmount.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/03_actions/04_applyDiscountAmount.ts)** :
  * [PrestaShop#39109 : Cart Rule : "Free Shipping" but not "Free Shipping"](https://github.com/PrestaShop/PrestaShop/issues/39109)
* **[tests/UI/campaigns/functional/BO/03_catalog/08_stocks/01_movements/01_filterMovements.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/01_movements/01_filterMovements.ts)** :
  * [PrestaShop#34337 : Stock Movement - Filter by Employee trigger multiple requests](https://github.com/PrestaShop/PrestaShop/issues/34337)
  * [PrestaShop#34334 : Stock Movement - Multiple Advanced Filters "Employee & Categories" doesn't work](https://github.com/PrestaShop/PrestaShop/issues/34334)
  * [PrestaShop#33842 : Stock Movement - Advanced Filter "Status = disabled" doesn't work](https://github.com/PrestaShop/PrestaShop/issues/33842)
* **[tests/UI/campaigns/functional/BO/03_catalog/08_stocks/06_displayProductsBelowLowStock.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/06_displayProductsBelowLowStock.ts)** :
  * [PrestaShop#33681 : BO-Stock Management-Bad order when Display products below low stock level first ](https://github.com/PrestaShop/PrestaShop/issues/33681)
* **[tests/UI/campaigns/functional/BO/08_design/06_imageSettings/14_checkCategoryImageFormat.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/14_checkCategoryImageFormat.ts)** :
  * [PrestaShop#32404 : Multiple image formats : WebP is not generated when a cover image for a category is uploaded](https://github.com/PrestaShop/PrestaShop/issues/32404)
* **[tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/05_enableDisableCountries.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/05_enableDisableCountries.ts)** :
  * [PrestaShop#36602 : Payment Modules not enabled for all active countries](https://github.com/PrestaShop/PrestaShop/issues/36602)
* **[tests/UI/campaigns/functional/BO/11_international/04_translations/01_modifyTranslation.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/04_translations/01_modifyTranslation.ts)** :
  * Move to foHummingbirdModalWishlistPage
* **[tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/03_allowIframes.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/03_allowIframes.ts)** :
  * [PrestaShop#33921 : Adding an iframe in PPV2 when the option is disabled leads to an exception](https://github.com/PrestaShop/PrestaShop/issues/33921)
* **[tests/UI/campaigns/functional/FO/classic/03_userAccount/04_getGDPRDataInPDF.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/04_getGDPRDataInPDF.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/FO/classic/06_homePage/05_selectColor.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/06_homePage/05_selectColor.ts)** :
  * [PrestaShop#36356 : MySQL / MariaDB : Different behavior for the default combination](https://github.com/PrestaShop/PrestaShop/issues/36356)
* **[tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/02_sortAndFilter/01_sortProducts.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/02_sortAndFilter/01_sortProducts.ts)** :
  * [PrestaShop#19810 : `ps_facetedsearch`: Sorting by price in faceted search does not work](https://github.com/PrestaShop/PrestaShop/issues/19810)
* **[tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/04_getGDPRDataInPDF.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/04_getGDPRDataInPDF.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/FO/hummingbird/06_homePage/05_selectColor.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/06_homePage/05_selectColor.ts)** :
  * [PrestaShop#35481 : FO > When clicking on a variation, the default combination is not displayed on the product page](https://github.com/PrestaShop/PrestaShop/issues/35481)
* **[tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/02_sortAndFilter/01_sortProducts.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/02_sortAndFilter/01_sortProducts.ts)** :
  * [PrestaShop#19810 : `ps_facetedsearch`: Sorting by price in faceted search does not work](https://github.com/PrestaShop/PrestaShop/issues/19810)
* **[tests/UI/campaigns/functional/FO/hummingbird/09_productPage/01_quickView/02_changeQuantity.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/01_quickView/02_changeQuantity.ts)** :
  * [PrestaShop#35219 : Hummingbird Quickview error](https://github.com/PrestaShop/PrestaShop/issues/35219)
* **[tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/02_useDifferentInvoiceAddress.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/02_useDifferentInvoiceAddress.ts)** :
  * [hummingbird#614 : Guest checkout: Use different invoice address : Can't order](https://github.com/PrestaShop/hummingbird/issues/614)
* **[tests/UI/campaigns/functional/WS/02_ordersCRUD.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/02_ordersCRUD.ts)** :
  * [PrestaShop#34564 : WS : Create an Order - Multiples fields are inconsistent after the POST and with a GET](https://github.com/PrestaShop/PrestaShop/issues/34564)
  * [PrestaShop#34576 : https://github.com/PrestaShop/PrestaShop/issues/34576](https://github.com/PrestaShop/PrestaShop/issues/34576)
* **[tests/UI/campaigns/functional/WS/03_productsCRUD.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/03_productsCRUD.ts)** :
  * [PrestaShop#33429 : https://github.com/PrestaShop/PrestaShop/issues/33429](https://github.com/PrestaShop/PrestaShop/issues/33429)
  * [PrestaShop#14903 : https://github.com/PrestaShop/PrestaShop/issues/14903](https://github.com/PrestaShop/PrestaShop/issues/14903)
  * [PrestaShop#33455 : https://github.com/PrestaShop/PrestaShop/issues/33455](https://github.com/PrestaShop/PrestaShop/issues/33455)
* **[tests/UI/campaigns/modules/02_blockwishlist/03_frontOffice/02_products/01_addProductToList.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/02_blockwishlist/03_frontOffice/02_products/01_addProductToList.ts)** :
  * [PrestaShop#36496 : https://github.com/PrestaShop/PrestaShop/issues/36496](https://github.com/PrestaShop/PrestaShop/issues/36496)
* **[tests/UI/campaigns/modules/22_ps_facetedsearch/02_configuration/04_showUnavailableOutOfStockLastFieldConfiguration.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/22_ps_facetedsearch/02_configuration/04_showUnavailableOutOfStockLastFieldConfiguration.ts)** :
  * [PrestaShop#36906 : https://github.com/PrestaShop/PrestaShop/issues/36906](https://github.com/PrestaShop/PrestaShop/issues/36906)
* **[tests/UI/campaigns/modules/22_ps_facetedsearch/02_configuration/05_categoryFilterDepthFieldConfiguration.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/22_ps_facetedsearch/02_configuration/05_categoryFilterDepthFieldConfiguration.ts)** :
  * [PrestaShop#36438 : https://github.com/PrestaShop/PrestaShop/issues/36438](https://github.com/PrestaShop/PrestaShop/issues/36438)
* **[tests/UI/campaigns/modules/29_ps_newproducts/02_configuration/03_configureSettingsNumberOfDays.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/29_ps_newproducts/02_configuration/03_configureSettingsNumberOfDays.ts)** :
  * [PrestaShop#35796 : https://github.com/PrestaShop/PrestaShop/issues/35796](https://github.com/PrestaShop/PrestaShop/issues/35796)
* **[tests/UI/campaigns/modules/35_ps_themecusto/01_installation/05_disableEnableModule.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/35_ps_themecusto/01_installation/05_disableEnableModule.ts)** :
  * [PrestaShop#36590 : https://github.com/PrestaShop/PrestaShop/issues/36590](https://github.com/PrestaShop/PrestaShop/issues/36590)
* **[tests/UI/campaigns/modules/37_psgdpr/02_configuration/07_multistore.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/37_psgdpr/02_configuration/07_multistore.ts)** :
  * [PrestaShop#37116 : https://github.com/PrestaShop/PrestaShop/issues/37116](https://github.com/PrestaShop/PrestaShop/issues/37116)
  * [PrestaShop#37112 : https://github.com/PrestaShop/PrestaShop/issues/37112](https://github.com/PrestaShop/PrestaShop/issues/37112)
* **[tests/UI/campaigns/modules/37_psgdpr/02_configuration/08_personalDataManagerForGuest.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/37_psgdpr/02_configuration/08_personalDataManagerForGuest.ts)** :
  * [PrestaShop#36847 : https://github.com/PrestaShop/PrestaShop/issues/36847](https://github.com/PrestaShop/PrestaShop/issues/36847)
  * [PrestaShop#36848 : https://github.com/PrestaShop/PrestaShop/issues/36848](https://github.com/PrestaShop/PrestaShop/issues/36848)
  * [PrestaShop#36865 : https://github.com/PrestaShop/PrestaShop/issues/36865](https://github.com/PrestaShop/PrestaShop/issues/36865)
* **[tests/UI/campaigns/sanity/05_cartFO/01_editCheckCart.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/05_cartFO/01_editCheckCart.ts)** :
  * [PrestaShop#9779 : https://github.com/PrestaShop/PrestaShop/issues/9779](https://github.com/PrestaShop/PrestaShop/issues/9779)
