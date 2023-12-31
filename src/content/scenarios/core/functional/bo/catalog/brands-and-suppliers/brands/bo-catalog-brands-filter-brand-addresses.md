---
title: "BO - Catalog - Brands - Filter Brand Addresses"
weight: 2
---

# BO - Catalog - Brands - Filter Brand Addresses
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-816
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/brands/addresses/01_filterAddresses.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands | The Brands page is well displayed |
| Filter by ID | Filter is successful<br><br>Filtered result is ID : 4 |
| Reset filter | No more filter is applied |
| Filter by Brand | Filter is successful<br><br>Filtered result is Brand : Studio Design |
| Reset filter | No more filter is applied |
| Filter by First name | Filter is successful<br><br>Filtered result is First name : manufacturer |
| Reset filter | No more filter is applied |
| Filter by Last name | Filter is successful<br><br>Filtered result is Last name : manufacturer |
| Reset filter | No more filter is applied |
| Filter by Zip/Postal code | Filter is successful<br><br>Filter result is Zip/Postal : 10154 |
| Reset filter | No more filter is applied |
| Filter by City | Filter is successful<br><br>Filter result is City : New York |
| Reset filter | No more filter is applied |
| Filter by Country | Filter is successful<br><br>Filter result is Country : United States |
| Reset filter | No more filter is applied |