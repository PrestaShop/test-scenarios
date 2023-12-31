---
title: "BO - Shop Parameters - Product Settings - Enable, disable display available quantities"
weight: 1
---

# BO - Shop Parameters - Product Settings - Enable, disable display available quantities
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1068
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/02_productPage/01_displayAvailableQuantities.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Product Settings | Product Settings is displayed |
| Display available quantities on the product page > NO > Save | Update successful alert is displayed |
| View my shop and go to first product page | Quantity is not displayed in product page |
| enable display available quantities on the product page | Success message is displayed |
| View my shop and go to first product page | Quantity is displayed in product page |