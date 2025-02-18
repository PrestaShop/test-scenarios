---
title: "Mail alerts module - Reset module"
weight: 4
---

# Mail alerts module - Reset module
## Details
* **Component** : ps_emailalerts
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4129

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset Mail alerts module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * In "Customer notifications" section, "Product availability" switch button is set to "Yes" by default |
| Change "Product availability" switch button is set to "No" for example > Click on "Save" button | A successful message "Settings updated successfully" is displayed |
| Go back to Modules > Module manager > Module list page with ps_emailalerts module displayed > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module ps_emailalerts should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module ps_emailalerts succeeded." is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Product availability" switch button is reseted to "Yes" (default value of the module) |
