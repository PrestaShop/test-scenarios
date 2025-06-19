---
title: "BO - Shop Parameters - Product Settings - Delivery time of in-stock products"
weight: 7
---

# BO - Shop Parameters - Product Settings - Delivery time of in-stock products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1077
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/08_enableDeliveryTimeOfInStockProducts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/product-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Preview "Mug Today is a good day" | FO product page is displayed in another tab. |
| Go to BO > Shop Parameters > Product Settings > Edit "Delivery time of in-stock products" : Delivered within 3-4 days > Save | Message Update successful is displayed |
| Go back to FO Mug Today is a good day product page | See under the price, the new label displayed : Delivered within 3-4 days |
