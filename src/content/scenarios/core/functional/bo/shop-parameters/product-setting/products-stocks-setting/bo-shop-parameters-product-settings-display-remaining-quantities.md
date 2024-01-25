---
title: "BO - Shop Parameters - Product Settings - Display remaining quantities"
weight: 7
---

# BO - Shop Parameters - Product Settings - Display remaining quantities
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1069
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/04_displayRemainingQuantities.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/product-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Catalog > Products' page | page title contains 'Products' |
| Create a product | product is created |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| update Display remaining quantities to 0 | Successful update message is displayed |
| View my shop and go to created product page | product availability is not displayed in product page |
| update Display remaining quantities to the default value | Successful update message is displayed |
| View my shop and go to created product page | product availability is displayed in product page |
