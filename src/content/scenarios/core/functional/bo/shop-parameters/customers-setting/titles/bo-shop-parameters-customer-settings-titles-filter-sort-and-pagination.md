---
title: "BO - Shop Parameters - Customer Settings - Titles - Filter, sort and pagination"
weight: 1
---

# BO - Shop Parameters - Customer Settings - Titles - Filter, sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1092
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/03_titles/01_filterSortAndPaginationTitles.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings/titles

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters > Customer Settings>Titles | Titles page is well displayed |
| Filter By id Criteria : '1' | Customers title  list is filtered. titles  listed have 1 in their ID |
| Reset all filters | All filters are reset. All customers Titles  are displayed |
| Filter By Social title  Criteria :  Mr. | Customers titles list is filtered. titles  listed have Mr. in their Social title |
| Reset all filters | All filters are reset. All customers Titles  are displayed |
| Filter By Gender . Criteria : Male | Customers titles  list is filtered. titles listed have Male in their gender |
| Reset all filters | All filters are reset. All customers Titles  are displayed |
| Ad new 21 social  titles : | Customer titles list is well displayed . |
| Change the number of items per page to 20 | There are 20 items visible<br>Current page is 1<br>Total of pages is 2 |
| Go to page 2 | There are 1 items visible<br>Current page is 2<br>Total of pages is 2 |
| Change the number of items per page to 50 | There are 21 items visible<br>Current page is 1<br>Total of pages is 1 |
| Sort titles by id desc | titles are sorted by id (3 -> 2 -> 1) |
| Sort titles by id asc | titles are sorted by id (1 -> 2 -> 3) |
| Sort titles by Social title desc | titles are sorted by Social title (z -> y -> x) |
| Sort titles by Social title asc | titles are sorted by Social title (x -> y -> z) |
| Reset all filters | All filters are reseted. <br>All customers Titles  are displayed |
