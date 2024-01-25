---
title: "BO - International - Tax Rules - CRUD Tax rules group"
weight: 2
---

# BO - International - Tax Rules - CRUD Tax rules group
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1030
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/02_taxRules/01_CRUDTaxRules.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/add-or-edit-tax-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Taxes > Tax Rules tab | Tax Rules page is displayed |
| Click to "Add new tax rules group" | Add new Tax rules page is displayed |
| Fill all information > Click on "Save and stay" | Successful creation notification<br><br>New tax rule displayed |
| Fill all information and click on "Save and stay" | Successful update notification<br><br>This tax rule is displayed on the bottom block |
| Click Edit for country Andorra | Edit page of Andorra displayed |
| Fill all information and click on "Save and stay" | Successful update notification<br><br>This tax rule is displayed on the bottom block |
| Click the dropdown button > Delete > Yes | Successful update alert is displayed<br><br>Andorra deleted |
| Click on the Tax Rules tab | Tax Rules page is displayed |
| Click the dropdown button > Delete > Yes | Successful deletion alert is displayed<br><br>Test to delete deleted |
| Click to "Tax Rules" | Tax Rules diplayed |
| Click to Edit | Edit : test to delete page displayed |
| Fill all information and click on "Save and stay" | Successful update notification |
| Click to "Tax Rules" | Tax Rules diplayed |
| Click on Delete option | Delete selected item?<br><br>Name: test to delete now<br><br> <br><br>notification |
| click on yes | Successful deletion<br> <br>Tax Rules with ID6 deleted |
