---
title: "BO - Catalog - Brands - Sort & Pagination Brands and Bulk Actions"
weight: 3
---

# BO - Catalog - Brands - Sort & Pagination Brands and Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-817
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/brands/brands/02_sortPaginationAndBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/brands-and-suppliers/brands-list

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | Page title contains 'Brands' |
| Sort brands by ID desc | Brands are sorted by ID (3 -> 2 -> 1) |
| Sort brands by Name asc | Brands are sorted by Name (a -> b -> c) |
| Sort brands by Name desc | Brands are sorted by name (c -> b -> a) |
| Sort brands by Status asc | Brands are sorted by Status asc (enabled -> disabled) |
| Sort by brands by Status desc | Brands are sorted by Status desc (disabled -> enabled) |
| Sort brands by ID asc | Brands are sorted by ID (1 -> 2 -> 3) |
| Change Display items to 10 | There are 2 pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The First page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Select created brands > Bulk action > Disable selected | The successful message "The status has been successfully updated." is displayed |
| Select created brands > Bulk action > Enable selected | The successful message "The status has been successfully updated." is displayed |
| Select created brands > Bulk action > Deleted selected > Confirm the deletion | The successful message "Successful deletion." is displayed |
