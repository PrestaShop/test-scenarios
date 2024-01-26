---
title: "BO - Catalog - Stocks - Bulk Edit Quantity with Input"
weight: 4
---

# BO - Catalog - Stocks - Bulk Edit Quantity with Input
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-841
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/03_bulkEditQuantity.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Catalog> Stock | page title contains 'Stock' is displayed |
| Go to products displayed and click on checkbox next to the bulk edit quantity | All products are checked |
| Click on arrows *UP* displayed in _bulk edit quantity_ and change quantity | number 3 is displayed on form control of _bulk edit quantity_ <br><br>All products have been added 3 items on *Physical* and *Available* rows |
| Click on arrows *DOWN* displayed in _bulk edit quantity_ and change quantity | number -5 is displayed on form control of _bulk edit quantity_ <br><br>Products checked have been deleted 5 items on *Physical* and *Available* rows |
