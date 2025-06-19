---
title: "BO - Advanced Parameters - Team - Permissions - Edit (Menu)"
weight: 1
---

# BO - Advanced Parameters - Team - Permissions - Edit (Menu)
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1161
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/permission/01_editMenu.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/team-employees

## Steps
| Step Description | Expected result |
| ----- | ----- |
| GO to BO > Advanced Parameters > Team > Permissions | SuperAdmin profile is displayed with message : Administrator permissions cannot be modified. |
| Click on Logistician Profile | 2 blocks are displayed : Menu and Modules |
| On Menu block > Click on Check All twice | Everything in Menu block is unchecked<br><br>Update successful message is displayed |
| Click on the check buttons for View, Add, Edit and Delete. | See that everything is checked for all lines<br><br>Update successful message is displayed |
| Refresh the page | See that all five columns are check<br><br>Update successful message is displayed |
| Click twice on All column to uncheck everything > Click All for Orders | See that everything is checked for lines : Sell, Orders, Catalog, Customers, Customer service and Stats<br><br>Update successful message is displayed |
