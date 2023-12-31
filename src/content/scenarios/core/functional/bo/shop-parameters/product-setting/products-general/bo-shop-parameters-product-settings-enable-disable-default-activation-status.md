---
title: "BO - Shop Parameters - Product Settings - Enable, disable default activation status"
weight: 5
---

# BO - Shop Parameters - Product Settings - Enable, disable default activation status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1067
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/01_productsGeneral/06_defaultActivationStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| enable default activation status | Successful update message is displayed |
| go to 'Catalog > Products' page | page title contains 'Products' |
| Go to create product | Switch product online is 'ON' |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| Disable default activation status | Successful update message is displayed |
