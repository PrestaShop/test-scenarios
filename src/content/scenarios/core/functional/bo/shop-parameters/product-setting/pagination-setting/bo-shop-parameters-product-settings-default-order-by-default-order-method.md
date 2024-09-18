---
title: "BO - Shop Parameters - Product Settings - Default order by / Default order method"
weight: 2
---

# BO - Shop Parameters - Product Settings - Default order by / Default order method
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1082
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/04_pagination/02_updateDefaultProductsOrder.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/product-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Product Settings | Product Settings page is well displayed |
| In the section Pagination > Set products default order to Product name | Product name  option to Default order is well selected |
| Set products default order method to Ascending | The default order method  Ascending is well selected |
| Click on save button | Successful update message is displayed |
| Click on the button View my shop > Go to all products page | All products page is well displayed |
| Check that products are ordered by: 'Product name - Ascending' |  |
| Go back to BO |  |
| Set products default order to: Product name | Product name option is well selected |
| Set products default order method to Descending | The default order method  Descending is well selected |
| Click on save button | Successful update message is displayed |
| Click on the button View my shop > Go to all products page | All products page is well displayed |
| Check that products are ordered by: 'Product name - Descending' |  |
| Go back to BO |  |
| Set products default order to Product price | Product price option is well selected |
| Set products default order method to Ascending | The default order method Ascending is well selected |
| Click on save button | Successful update message is displayed |
| Click on the button View my shop > Go to all products page | All products page is well displayed |
| Check that products are ordered by: 'Product price - Ascending' |  |
| Go back to BO |  |
| Set products default order to Product price | Product price option is well selected |
| Set products default order method to Descending | The default order method Descending is well selected |
| Click on save button | Successful update message is displayed |
| Click on the button View my shop > Go to all products page > check that products are ordered by: 'Product price - Descending' |  |
| Go back to BO |  |
| set products default order to Position inside category | Position inside category option is well selected |
| Set products default order method to Ascending | The default order method Ascending is well selected |
| Click on save button | Successful update message is displayed |
| Click on the button View my shop > go to all products page > check that products are ordered by: 'Position inside category - Ascending' |  |
| Go to BO |  |
| Set products default order method to Ascending<br><br>set products default order to Product price | The default order method  Ascending is well selected |
| Click on save button | Successful update message is displayed |
