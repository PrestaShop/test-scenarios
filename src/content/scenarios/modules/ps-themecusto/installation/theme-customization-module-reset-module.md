---
title: "Theme Customization module - Reset module"
weight: 4
---

# Theme Customization module - Reset module
## Details
* **Component** : ps_themecusto
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4159
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_themecusto/01_installation/04_resetModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_themecusto | The module page list should be displayed and *Theme Customization* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset Theme Customization module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Reset" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module ps_themecusto succeeded." is displayed |
| Go to Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are available |
