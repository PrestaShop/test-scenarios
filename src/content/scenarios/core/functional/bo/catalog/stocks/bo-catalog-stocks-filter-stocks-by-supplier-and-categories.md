---
title: "BO - Catalog - Stocks - Filter Stocks by Supplier and Categories"
weight: 2
---

# BO - Catalog - Stocks - Filter Stocks by Supplier and Categories
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7603
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/07_filterStocksByCategories.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Stocks | Page Stock management is well displayed |
| Click on Advanced Filter | More filter is displayed |
| Filter by supplier > Check : Fashion supplier | All products with Fashion supplier are displayed |
| Add filter by categories > Check : Art | All products with Fashion supplier and Art categories are displayed |
| Uncheck all checkboxes to reset filter | All products are displayed |
| Filter by supplier > Check : Accessories supplier | All products with Accessories supplier are displayed |
| Add filter by categories > Check : Stationery | All products with Accessories supplier and Stationery categories are displayed |
| Uncheck all checkboxes to reset filter | All products are displayed |
