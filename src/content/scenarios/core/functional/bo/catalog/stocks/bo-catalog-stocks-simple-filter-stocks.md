---
title: "BO - Catalog - Stocks - simple Filter Stocks"
weight: 1
---

# BO - Catalog - Stocks - simple Filter Stocks
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-838
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/01_simpleFilterStocks.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog > Stocks | Stock management page is displayed |
| Clic on Advenced Filter | More filter is displayed |
| filter by supplier | All products with Fashion supplier are displayed |
| Add filter by categories | All products with Fashion supplier and Art categories are displayed |
| uncheck all checkboxes to reset filter | All products are displayed |
| filter by supplier | All products with Accessories supplier are displayed |
| Add filter by categories | All products with Accessories supplier and Stationery categories are displayed |
| uncheck all checkboxes to reset filter | number of element in grid after reset = total of element in grid |
