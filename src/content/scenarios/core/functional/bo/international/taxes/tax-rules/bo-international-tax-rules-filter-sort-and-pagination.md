---
title: "BO - International - Tax Rules - Filter, sort and pagination"
weight: 1
---

# BO - International - Tax Rules - Filter, sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1029
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/02_taxRules/02_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/taxes-rules-listing

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Taxes > Tax Rules tab | Tax Rules page is displayed |
| Sort by ID acs | table is sorted by Aliases desc (1> 2> 3) |
| Sort by ID desc | table is sorted by Aliases desc (3>2> 1) |
| Sort by name acs | table is sorted by name desc (a > b> c) |
| Sort by name desc | table is sorted by name desc (c > b> a) |
| Filter By ID | Tax rules  list is filtered. <br>All taxes rules contains number 1 in their ID |
| Reset all filters | All filters are reseted |
| Filter By Name | Tax rules  list is filtered. <br>All taxes rules contains FR Taux standard (20%) are displayed |
| Reset all filters | All filters are reseted |
| Filter By Enabled  status | Tax rules  list is filtered. <br>All taxes rules with the status enabled = yes are displayed |
| Reset all filters | All filters are reseted |
| Create 17 new taxe rule <br>Click to "Add new tax rules group > Fill all information > Click on "Save and stay" > Fill all information and click on "Save and stay" | Successful creation message is displayed |
| IN the tax rules pages , change  the number of items per page to 20 | There are 20 items visible in the current page<br>Current page is 1<br>Total of pages is 2 |
| Go to page 2 | Current page is 2<br>Total of pages is 2 |
| Change the number of items per page to 50 | All the  items  are visible<br>Current page is 1<br>Total of pages is 1 |
