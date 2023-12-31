---
title: "CLONE - BO - Customers - Bulk Actions"
weight: 10
---

# CLONE - BO - Customers - Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7264
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/03_customersBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers page | The Customers page is displayed correctly |
| The Customers page is displayed correctly | All filters are reset<br>All Customers are displayed |
| Click on Add new customer | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer |
| Fill all information > Click on Save | Customer is saved correctly<br><br>Message is displayed : Successful creation |
| Click on Add new customer" | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer" |
| Fill all information > Click on Save | Customer is saved correctly<br><br>Message is displayed : Successful creation |
| In list, Filter by First name | Filter is succeeded |
| Select All Customers > Bulk Action > Disable selection | All customers are disabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Enable selection | All customers are enabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Delete selection > Confirm deletion | Customers are successfully deleted<br><br>Message "The selection has been successfully deleted" |