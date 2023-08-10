---
title: "BO - Shop Parameters - Product Settings - Enable, disable catalog mode"
weight: 1
---

# BO - Shop Parameters - Product Settings - Enable, disable catalog mode
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1063
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/01_productsGeneral/01_catalogModetests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/01_productsGeneral/01_catalogMode.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings | Product Settings page is displayed |
| Catalog mode > YES > Save | Update successful alert is displayed |
| disable show prices | Successful update message is displayed |
| View my shop | Price is not visible in FO |
| Open a product | Product price is not visible<br>Add to cart button is not visible |
| Go back to BO > Show prices > YES > Save | Update successful alert is displayed |
| View my shop | Prices are displayed on FO |
| Open a product | Product price is visible<br>Add to cart button is not visible |
| Go back to BO > Catalog mode > NO > Save | Update successful alert is displayed |
