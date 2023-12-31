---
title: "BO - International - Taxes - Bulk Actions"
weight: 3
---

# BO - International - Taxes - Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1025
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/01_taxes/03_taxesBulkActionsInBO.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO | Login page is displayed |
| Sign in to Bo | Dashboard page is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Reset filter and get number of taxes in BO | Number of taxes is above 0 |
| Go to add new Tax Page (create first tax) | Add new Tax page is displayed |
| Fill all information and click on save<br>Criteria<br>Rate : Random integer between 1 and 100<br>name : 'TVA to delete'<br>enabled : Yes | Tax is created<br>Successful message is displayed |
| Go to add new Tax Page (create second tax) | Add new Tax page is displayed |
| Fill all information and click on save<br>Criteria<br>Rate : Random integer between 1 and 100<br>name : 'TVA to delete2'<br>enabled : Yes | Tax is created<br>Successful message is displayed |
| Filter By tax name<br>Criteria : 'TVA to delete' | Taxes created are displayed |
| Select all and disable with bulk actions | All taxes are disabled (check of column) |
| Select all and enable with bulk actions | All taxes are enabled (check of column) |
| Filter By tax name<br>Criteria : 'TVA to delete' | Taxes created are displayed |
| Select all and delete with bulk actions | Javascript dialog is displayed |
| Accept to delete | Taxes are deleted<br>Successful message is displayed |
| Reset all filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |