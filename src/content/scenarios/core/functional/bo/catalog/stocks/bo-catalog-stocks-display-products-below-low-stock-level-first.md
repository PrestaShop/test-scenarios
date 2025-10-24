---
title: "BO - Catalog - Stocks : Display products below low stock level first"
weight: 6
---

# BO - Catalog - Stocks : Display products below low stock level first
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-843
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/06_displayProductsBelowLowStock.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Stock | The products are displayed in descending order by ID |
| For the product *Hummingbird notebook Paper Type - Doted - ID 18* > Edit quantity to -300 > Click on the checkmark | Stock successfully updated message is displayed<br>Quantities for *Physical* and *Available* go from 300 to 0<br>The whole line of the product is red |
| Click on the "Display products below low stock level first" checkbox | The products with low level stock are displayed first<br>The product Hummingbird notebook Paper Type - Doted - ID 18 is displayed first |
| Uncheck the "Display products below low stock level first" checkbox | The products are displayed in descending order by ID<br>Issue related : https://github.com/PrestaShop/PrestaShop/issues/33681 |
