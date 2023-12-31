---
title: "BO - Shop Parameters - Product Settings - New days number"
weight: 2
---

# BO - Shop Parameters - Product Settings - New days number
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1064
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/01_productsGeneral/02_newDaysNumber.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| update number of days to 0 | Successful update message is displayed |
| View my shop | New flag is visible |
| Go back to BO and reset number of days value | Successful update message is displayed |
| View my shop | New flag is not visible |