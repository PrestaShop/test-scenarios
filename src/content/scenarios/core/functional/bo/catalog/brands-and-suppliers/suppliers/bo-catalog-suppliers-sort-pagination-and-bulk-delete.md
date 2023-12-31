---
title: "BO - Catalog - Suppliers - Sort, Pagination and bulk delete"
weight: 3
---

# BO - Catalog - Suppliers - Sort, Pagination and bulk delete
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-825
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/suppliers/04_paginationSortAndBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Suppliers page | The suppliers page is well displayed |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Name asc | The list is sorted by Name asc (a->b->c) |
| Sort by Name desc | The list is sorted by Name desc (c->b->a) |
| Sort by Number of products  asc | The list is sorted by Number of products asc (0->1->2) |
| Sort by Number of products  desc | The list is sorted by Number of products desc (2->1->0) |
| Sort by Status asc | The list is sorted asc |
| Sort by Status desc | The list is sorted by desc |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 10 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete created Suppliers | Suppliers well deleted with message "Successful deletion" |
