---
title: "BO - Advanced Parameters - Team - Permissions - Edit (Modules)"
weight: 2
---

# BO - Advanced Parameters - Team - Permissions - Edit (Modules)
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1162
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/permission/02_editModules.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| GO to BO > Advanced Parameters > Team > Permissions | SuperAdmin profile is selected with message : Administrator permissions cannot be modified.<br><br>Three Profiles are displayed : <br> * Logistician<br> * Translator<br> * Commercial |
| Click on Logistician Profile | * 2 blocks are displayed : Menu and Modules<br> * The Modules block is all unchecked |
| On Modules block > Click on View checkbox twice | * All checkbox cases are unchecked<br> * "Update successful " message is displayed |
| Click on the checkbox cases for View, Configure and Uninstall. | All chechboxes are well checked for all lines<br><br>Update successful message is displayed |
| Refresh the page > Click on Logistician | See that all three columns are checked |
| Click twice on All column to uncheck everything | See that everything is unchecked for the lines <br><br>Update successful message is displayed |