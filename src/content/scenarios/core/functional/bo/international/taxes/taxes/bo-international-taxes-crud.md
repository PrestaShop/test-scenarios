---
title: "BO - International - Taxes - CRUD"
weight: 2
---

# BO - International - Taxes - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1024
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/01_taxes/02_CRUDTaxesInBO.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/add-or-edit-taxes

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO | Login page is displayed |
| Sign in to Bo | Dashboard page is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Go to add new Tax Page | Add new Tax page is displayed |
| Fill all information and click on save<br>Criteria <br>Rate : Random integer between 1 and 100<br>name : 'TVA Test %rate%'<br>enabled : Yes | Tax is created<br>Successful message is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Filter By name of tax created | Tax created is displayed |
| Click on edit | Edit page is displayed |
| Change all information and save Tax<br>Criteria <br>Rate : Random integer between 1 and 100<br>name : 'TVA Test %rate%'<br>enabled : Yes | Tax is edited <br>Successful message is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Filter By name of tax edited | Tax created is displayed |
| delete Tax | Dialog listener is displayed |
| Accept dialog listener | Tax is deleted |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
