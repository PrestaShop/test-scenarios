---
title: "BO - Catalog - Brands - Sort & Pagination Addresses and Bulk Actions"
weight: 5
---

# BO - Catalog - Brands - Sort & Pagination Addresses and Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-820
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/brands/brands/02_sortPaginationAndBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/brands-and-suppliers/brands-list

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands | The Brands page is displayed |
| Reset addresses filter | Number of Addresses after creation = Total of Addresses |
| Sort Addresses by Brand desc | Addresses are sorted by Brand (c -> b -> a) |
| Sort Addresses by ID desc | Addresses are sorted by ID (3 -> 2 -> 1) |
| Sort Addresses by Brand asc | Addresses are sorted by brand (a -> b -> c) |
| Sort Addresses by First name asc | Addresses are sorted by First name (a -> b -> c) |
| Sort Addresses by First name desc | Addresses are sorted by First name (c -> b -> a) |
| Sort Addresses by Last name asc | Addresses are sorted by Last name (a -> b -> c) |
| Sort Addresses by Last name desc | Addresses are sorted by Last name (c -> b -> a) |
| Sort Addresses by Zip/Postal code asc | Addresses are sorted by Zip/Postal code (1 -> 2 -> 3) |
| Sort Addresses by Zip/Postal code desc | Addresses are sorted by Zip/Postal code (3 -> 2 -> 1) |
| Sort Addresses by City asc | Addresses are sorted by city (a -> b -> c) |
| Sort Addresses by City desc | Addresses are sorted by City (c -> b -> a) |
| Sort Addresses by Country asc | Addresses are sorted by Country (a -> b -> c) |
| Sort Addresses by Country desc | Addresses are sorted by Country (c -> b -> a) |
| Change Display items to 10 | There are 2 pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The First page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Filter Addresses by First name | Number of Addresses < Total of Addresses<br><br>Addresses table is well filtered with "manufacturer" |
| Select created addresses > Bulk action > Deleted selected > Confirm the deletion | The successful message "Successful deletion." is displayed |
