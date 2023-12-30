---
title: "BO - Catalog - Files - Filter, Pagination, Sort and bulk actions"
weight: 3
---

# BO - Catalog - Files - Filter, Pagination, Sort and bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-829
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/06_files/03_filterSortPaginationAndBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Files page | The files page is well displayed |
| Filter By ID | Number files < Total Files and the list contains the searched ID |
| Reset Filter | Number files = Total files |
| Filter by Name | Number files < Total files and the list contains the searched name |
| Reset Filter | Number files = Total files |
| Filter by Size<br><br>(doesn't work: https://github.com/PrestaShop/PrestaShop/issues/11054) | Number of files < Total of files and the list contains the searched size |
| Reset Filter | Number files = Total files |
| Filter by Products | Number Files < Total Files and the list contain the searched number of Products |
| Reset Filter | Number files = Total files |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Name asc | The list is sorted by Name asc (a->b->c) |
| Sort by Name desc | The list is sorted by Name desc (c->b->a) |
| Sort by File asc | The list is sorted by File asc |
| Sort by File desc | The list is sorted bu file desc |
| Sort by Size asc | The list is sorted by Size asc |
| Sort by Size desc | The list is sorted by Size desc |
| Sort by number of Products asc | The list is sorted by number of Products asc |
| Sort by number of Products desc | The list is sorted by number of Products desc |
| Change Display items to 10 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete all created files by bulk actions | All files are well deleted |