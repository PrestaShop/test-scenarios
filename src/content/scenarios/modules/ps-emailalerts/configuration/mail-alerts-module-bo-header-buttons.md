---
title: "Mail alerts module - BO Header Buttons"
weight: 1
---

# Mail alerts module - BO Header Buttons
## Details
* **Component** : ps_emailalerts
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4147
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/20_ps_emailalerts/02_configuration/01_boHeaderButtons.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * 3 buttons on the header are displayed (Back / Translate / Manage hooks) |
| Click on "Back" button | The module page list is displayed |
| Search ps_emailalerts | *Mail alerts* module is displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * 3 buttons on the header are displayed (Back / Translate / Manage hooks) |
| Click on "Translate" button | "Translate this module" modal is opened to choose a translation |
| Click anywhere on the window or on the cross of the modal on top right corner | * The modal is removed<br> * The "Configure" page of the module is displayed |
| Click on "Manage hooks" button | "Positions" page is displayed with this module on its hooks |
