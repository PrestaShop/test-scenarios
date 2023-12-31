---
title: "BO - Advanced Parameters - Multistore - Multistore options"
weight: 8
---

# BO - Advanced Parameters - Multistore - Multistore options
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1190
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/08_multistoreOptions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > Multistore | Multistore page is displayed |
| In block Multistore options | See Default store is the name of your current shop |
| Click on the dropdown > Choose "new shop" as your default shop > Save | The settings have been successfully updated. |
| Click on Add a new store > Create a new store with name |  |
| Scroll down to the second block "Import data from another shop" | See the option "Choose the source store" is set to "new shop" by default |
| Save | Successful creation message is displayed<br>See your new shop "my other shop" has been created. |
| Add a new URL to the shop > Save | Successful creation message is displayed |
| Go to Multistore options > Set Default Store to your first shop > Save | The settings have been successfully updated. |
