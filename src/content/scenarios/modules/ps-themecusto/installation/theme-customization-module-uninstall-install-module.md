---
title: "Theme Customization module - Uninstall/Install module"
weight: 2
---

# Theme Customization module - Uninstall/Install module
## Details
* **Component** : ps_themecusto
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4157
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_themecusto/01_installation/02_uninstallAndInstallModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_themecusto | The module page list should be displayed and *Theme Customization* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall Theme Customization module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module ps_themecusto succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "ps_themecusto" folder should be still on it |
| Go to Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are not available |
| Go back to Modules > Module Manager >Search ps_themecusto module > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module ps_themecusto succeeded." is displayed<br> * The module is installed, the button at the right of the module is displaying "Disable Mobile"<br> * In folders of you shop: yourshop/modules/, the "ps_themecusto" folder should be still on it |
| Go to Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are available |
