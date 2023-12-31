---
title: "BO - Catalog - Features - Sort & Pagination & Bulk delete"
weight: 3
---

# BO - Catalog - Features - Sort & Pagination & Bulk delete
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-810
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/02_features/features/02_sortPaginationAndBulkDelete.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Features | The Features page is displayed |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Name asc | The list is sorted by Name asc (a->b->c) |
| Sort by Name desc | The list is sorted by Name desc (c->b->a) |
| Sort by Position asc | The list is sorted by position asc (1->2->3) |
| Sort by Position desc | The list is sorted by position desc (3->2->1) |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Create 2 Feature (data created as a pre-condition) | Message Successful creation is displayed<br><br>List of features is updated |
| Filter on Name "fa" | Filter is successful<br><br>Filtered result has 2 Features |
| Click on Bulk action button | A drop down is displayed |
| Click on "Select All" | All Features are selected |
| Click on Bulk action button | A drop down is displayed |
| Click on "Delete selected" and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed and the list empty |
| Reset Filter | Number of Features = 2 |
