---
title: "ps_apiresources - Disable/Enable module"
weight: 2
---

# ps_apiresources - Disable/Enable module
## Details
* **Component** : ps_apiresources
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7804
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_apiresources/01_installation/02_disableEnableModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set checked the checkbox “Authorization server" | The checkbox “Authorization server” is checked |
| Click on Save button | The message “Update successful” is displayed |
| Go to BO > Modules > Module manager and search ps_apiresources | The module page list should be displayed and *PrestaShop API Resources* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable PrestaShop API Resources module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, disable it" button to confirm the disable of the module | * After loading, a green message "Disable action on module ps_facetedsearch succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>All scopes relative to the Core are displayed and enabled<br><br>All scopes relative to the module are displayed and disabled |
| Go back to BO > Module list page with ps_apiresources module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module ps_apiresources succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Configure" |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>All scopes relative to the Core are displayed and enabled<br><br>All scopes relative to the module are displayed and enabled |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set unchecked the checkbox “Authorization server" | The checkbox “Authorization server” is unchecked |
| Click on Save button | The message “Update successful” is displayed |