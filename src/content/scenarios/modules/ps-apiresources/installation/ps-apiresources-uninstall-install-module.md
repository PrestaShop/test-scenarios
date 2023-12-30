---
title: "ps_apiresources - Uninstall/Install module"
weight: 1
---

# ps_apiresources - Uninstall/Install module
## Details
* **Component** : ps_apiresources
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7806
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_apiresources/01_installation/01_uninstallAndInstallModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_apiresources | The module page list should be displayed and *PrestaShop API Resources* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall PrestaShop API Resources module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module ps_emailalerts succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "ps_emailalerts" folder should be still on it |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>Scopes relative to the Core are found<br><br>No scopes relative to the module are found |
| Go back to BO > Module list page with ps_apiresources module displayed > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module ps_apiresources succeeded." is displayed<br> * The module is installed, the button at the right of the module is displaying "Configure"<br> * In folders of you shop: yourshop/modules/, the "ps_apiresources" folder should be still on it |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>Scopes relative to the Core are found<br><br>Scopes relative to the module are found |