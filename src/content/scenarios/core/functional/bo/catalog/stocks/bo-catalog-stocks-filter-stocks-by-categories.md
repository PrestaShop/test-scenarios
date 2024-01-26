---
title: "BO - Catalog - Stocks - Filter Stocks by Categories"
weight: 7
---

# BO - Catalog - Stocks - Filter Stocks by Categories
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-844
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/07_filterStocksByCategories.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Stock | Page Stock management is well displayed |
| Click on Advanced filters > go to Filter by categories > Click on EXPAND > Check Art and Accessories | * Only product from Art and Accessories category are displayed<br> * The displayed products are sorted in ascending order by ID |
| Uncheck all checkboxes | All products are displayed |
| Check Clothes checkbox | All Clothes products are displayed |
| Check all checkboxes | All products are displayed |
