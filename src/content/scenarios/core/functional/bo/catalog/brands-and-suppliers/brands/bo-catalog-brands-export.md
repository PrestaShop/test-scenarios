---
title: "BO - Catalog - Brands - Export"
weight: 6
---

# BO - Catalog - Brands - Export
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-821
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/brands/brands/03_exportBrands.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/brands-and-suppliers/view-brand

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | The Brands page is well displayed |
| Click on the Settings icon | A drop-down is displayed |
| Click on "Export" | A csv file is downloaded |
| Check the csv file | All data are correct<br><br>You should have the same fields as in the BO (ID, Logo, Name, Addresses, Products, Enabled) |
