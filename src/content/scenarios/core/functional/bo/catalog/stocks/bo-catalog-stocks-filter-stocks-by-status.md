---
title: "BO - Catalog - Stocks - Filter Stocks by Status"
weight: 5
---

# BO - Catalog - Stocks - Filter Stocks by Status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-842
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/05_filterStocksByStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog> products and disable the status of the first product in the product list | The product is disabled. |
| Go to BO> Catalog> Stock | page title contains 'Stock' is displayed |
| Click on the collapse button titled *Advanced filters* | The filters are displayed |
| Filter by status = disabled | The disabled products are displayed |
| Filter by status = Enabled | The enabled products are displayed. |
| Filter by status = All | All products are displayed |
