---
title: "BO - Catalog - Features - Values - Sort & Pagination & bulk delete"
weight: 7
---

# BO - Catalog - Features - Values - Sort & Pagination & bulk delete
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-811
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/02_features/features/02_sortPaginationAndBulkDelete.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Tab Features | The Features page is displayed |
| Search by Name = Composition | The list contains the searched Name |
| Click on "View" | The list Value page is displayed |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Value asc | The list is sorted by Value asc (a->b->c) |
| Sort by Value desc | The list is sorted by Value desc (c->b->a) |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 20 | There are 2 pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Create 2 Feature values (data created as a pre-condition) | Message Successful creation is displayed<br><br>List of values is updated |
| Filter on Name "hell" | Filter is successful<br><br>Filtered result has 2 Values |
| Click on Bulk action button | A drop down is displayed |
| Click on "Select All" | All Values are selected |
| Click on Bulk action button | A drop down is displayed |
| Click on "Delete selected" and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed and the list empty |
| Reset Filter | Number of Values = 6 |