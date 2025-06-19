---
title: "BO - Customers - Export"
weight: 5
---

# BO - Customers - Export
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-853
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/06_exportCustomers.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers page | Customers listing is displayed correctly |
| Export order to csv file > Save file to computer | The file is downloaded successfully |
| Open .csv file > Check that data is correct | There should be 13 columns with the correct info |
