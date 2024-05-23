---
title: "develop"
weight: 1
---

# Known bugs
* **[tests/UI/campaigns/functional/API/02_endpoints/03_cartRule/01_putCartRuleId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_cartRule/01_putCartRuleId.ts.ts)** :
  * [PrestaShop#34505 : API : Endpoint `PUT /api/cartRule`- Mode debug preprod ](https://github.com/PrestaShop/PrestaShop/issues/34505)
* **[tests/UI/campaigns/functional/API/02_endpoints/04_customerGroup/01_postCustomersGroup.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/04_customerGroup/01_postCustomersGroup.ts.ts)** :
  * [PrestaShop#34506 : API : Endpoint `POST /api/customers/group` - Doc swagger](https://github.com/PrestaShop/PrestaShop/issues/34506)
* **[tests/UI/campaigns/functional/API/02_endpoints/05_hookStatus/02_putHookStatusId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/05_hookStatus/02_putHookStatusId.ts.ts)** :
  * [PrestaShop#34507 : API : Endpoint `PUT /api/hook-status` - Issues Doc Swagger & Enpoint format ](https://github.com/PrestaShop/PrestaShop/issues/34507)
* **[tests/UI/campaigns/functional/API/02_endpoints/06_hooks/01_getHooks.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_hooks/01_getHooks.ts.ts)** :
  * [PrestaShop#35616 : Endpoint /api/hooks & List of Hooks : Incorrect count of hooks](https://github.com/PrestaShop/PrestaShop/issues/35616)
* **[tests/UI/campaigns/functional/API/02_endpoints/06_hooks/02_getHooksId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_hooks/02_getHooksId.ts.ts)** :
  * [PrestaShop#34552 : API : Endpoint `GET /api/hooks/{id}` : Difference between title & name - Enpoint issue](https://github.com/PrestaShop/PrestaShop/issues/34552)
* **[tests/UI/campaigns/functional/API/02_endpoints/07_language/01_getLanguages.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/07_language/01_getLanguages.ts.ts)** :
  * [PrestaShop#35860 : International > Languages : Display locale in list & readonly edit](https://github.com/PrestaShop/PrestaShop/issues/35860)
* **[tests/UI/campaigns/functional/API/02_endpoints/10_product/01_postProduct.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_product/01_postProduct.ts.ts)** :
  * [PrestaShop#35619 : Endpoint `POST /api/product` : Descriptions are not updated](https://github.com/PrestaShop/PrestaShop/issues/35619)
* **[tests/UI/campaigns/functional/API/02_endpoints/10_product/04_patchProductId.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_product/04_patchProductId.ts.ts)** :
  * [PrestaShop#35626 : Endpoint `PATCH /api/product/{productId}` : Type is not updated](https://github.com/PrestaShop/PrestaShop/issues/35626)
* **[tests/UI/campaigns/functional/API/02_endpoints/11_products/02_getProductsSearch.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/11_products/02_getProductsSearch.ts.ts)** :
  * [PrestaShop#34486 : The APIDoc TryItOut for `/api/products/search/{phrase}/{resultsLimit}/{isoCode}` doesn't work - Enpoint Issue](https://github.com/PrestaShop/PrestaShop/issues/34486)
* **[tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/11_checkInvoice.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/11_checkInvoice.ts.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/BO/03_catalog/01_products/22_bulkActionsEnableDisable3DotsButton.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/22_bulkActionsEnableDisable3DotsButton.ts.ts)** :
  * [PrestaShop#34191 : Duplicated Product & Multiples languages ](https://github.com/PrestaShop/PrestaShop/issues/34191)
* **[tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/01_attributes/02_changePosition.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/01_attributes/02_changePosition.ts.ts)** :
  * [PrestaShop#35535 : DragNDrop and Tests UI on the migrated page](https://github.com/PrestaShop/PrestaShop/issues/35535)
* **[tests/UI/campaigns/functional/BO/03_catalog/08_stocks/01_movements/01_filterMovements.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/01_movements/01_filterMovements.ts.ts)** :
  * [PrestaShop#34337 : Stock Movement - Filter by Employee trigger multiple requests](https://github.com/PrestaShop/PrestaShop/issues/34337)
  * [PrestaShop#34334 : Stock Movement - Multiple Advanced Filters "Employee & Categories" doesn't work](https://github.com/PrestaShop/PrestaShop/issues/34334)
  * [PrestaShop#33842 : Stock Movement - Advanced Filter "Status = disabled" doesn't work](https://github.com/PrestaShop/PrestaShop/issues/33842)
* **[tests/UI/campaigns/functional/BO/03_catalog/08_stocks/06_displayProductsBelowLowStock.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/06_displayProductsBelowLowStock.ts.ts)** :
  * [PrestaShop#33681 : BO-Stock Management-Bad order when Display products below low stock level first ](https://github.com/PrestaShop/PrestaShop/issues/33681)
* **[tests/UI/campaigns/functional/BO/08_design/06_imageSettings/11_imageGenerationOnCreation.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/11_imageGenerationOnCreation.ts.ts)** :
  * [PrestaShop#30520 : Categories image - harmonization of 2 images ](https://github.com/PrestaShop/PrestaShop/issues/30520)
* **[tests/UI/campaigns/functional/BO/08_design/06_imageSettings/14_checkCategoryImageFormat.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/14_checkCategoryImageFormat.ts.ts)** :
  * [PrestaShop#32404 : Multiple image formats : WebP is not generated when a cover image for a category is uploaded](https://github.com/PrestaShop/PrestaShop/issues/32404)
* **[tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/03_allowIframes.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/03_allowIframes.ts.ts)** :
  * [PrestaShop#33921 : Adding an iframe in PPV2 when the option is disabled leads to an exception](https://github.com/PrestaShop/PrestaShop/issues/33921)
* **[tests/UI/campaigns/functional/FO/classic/03_userAccount/04_getGDPRDataInPDF.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/04_getGDPRDataInPDF.ts.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/04_getGDPRDataInPDF.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/04_getGDPRDataInPDF.ts.ts)** :
  * [PrestaShop#22581 : INVOICE - MAIL / No shop logo on the invoice when you change the port (Docker)](https://github.com/PrestaShop/PrestaShop/issues/22581)
* **[tests/UI/campaigns/functional/FO/hummingbird/09_productPage/01_quickView/02_changeQuantity.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/01_quickView/02_changeQuantity.ts.ts)** :
  * [PrestaShop#35219 : Hummingbird Quickview error](https://github.com/PrestaShop/PrestaShop/issues/35219)
* **[tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/02_changeQuantity.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/02_changeQuantity.ts.ts)** :
  * https://github.com/PrestaShop/hummingbird/pull/600
  * [hummingbird#615 : In product page - The Add to cart button is greyed out when I change quantity to 0 and back to a positive quantity](https://github.com/PrestaShop/hummingbird/issues/615)
* **[tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/16_displayDiscountAndVolumeDiscount.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/16_displayDiscountAndVolumeDiscount.ts.ts)** :
  * [hummingbird#616 : Product page - Product price with a volume discount is incorrect until I add the product to my cart](https://github.com/PrestaShop/hummingbird/issues/616)
* **[tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/02_useDifferentInvoiceAddress.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/02_useDifferentInvoiceAddress.ts.ts)** :
  * [hummingbird#614 : Guest checkout: Use different invoice address : Can't order](https://github.com/PrestaShop/hummingbird/issues/614)
* **[tests/UI/campaigns/functional/WS/02_ordersCRUD.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/02_ordersCRUD.ts.ts)** :
  * [PrestaShop#34564 : WS : Create an Order - Multiples fields are inconsistent after the POST and with a GET](https://github.com/PrestaShop/PrestaShop/issues/34564)
  * [PrestaShop#34576 : WS : Update an Order - The payment is removed](https://github.com/PrestaShop/PrestaShop/issues/34576)
* **[tests/UI/campaigns/functional/WS/03_productsCRUD.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/03_productsCRUD.ts.ts)** :
  * [PrestaShop#33429 : WS : Products - The response of the GET request has not defined the field `new`](https://github.com/PrestaShop/PrestaShop/issues/33429)
  * [PrestaShop#14903 : Cannot add a position_in_category using webservices](https://github.com/PrestaShop/PrestaShop/issues/14903)
  * [PrestaShop#33455 : WS : Products - The field `low_stock_alert` doesn't work](https://github.com/PrestaShop/PrestaShop/issues/33455)
* **[tests/UI/campaigns/modules/blockwishlist/02_configuration/02_statisticsTabSettings.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/blockwishlist/02_configuration/02_statisticsTabSettings.ts.ts)** :
  * [PrestaShop#33374 : Blockwislist v3.0 : Call to a member function formatNumber() on null](https://github.com/PrestaShop/PrestaShop/issues/33374)
* **[tests/UI/campaigns/modules/ps_apiresources/01_installation/02_disableEnableModule.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_apiresources/01_installation/02_disableEnableModule.ts.ts)** :
  * [PrestaShop#34496 : If the module `ps_apiresources` is disabled, Scopes of the module are not disabled](https://github.com/PrestaShop/PrestaShop/issues/34496)
* **[tests/UI/campaigns/modules/ps_newproducts/02_configuration/03_configureSettingsNumberOfDays.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_newproducts/02_configuration/03_configureSettingsNumberOfDays.ts.ts)** :
  * [PrestaShop#35796 : `ps_newproducts` : Invalid input display the block or can't be saved](https://github.com/PrestaShop/PrestaShop/issues/35796)
* **[tests/UI/campaigns/sanity/05_cartFO/01_editCheckCart.ts](https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/05_cartFO/01_editCheckCart.ts.ts)** :
  * [PrestaShop#9779 : [BOOM-4571] Rounding Problem](https://github.com/PrestaShop/PrestaShop/issues/9779)
