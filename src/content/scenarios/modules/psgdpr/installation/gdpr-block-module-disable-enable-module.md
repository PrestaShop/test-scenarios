---
title: "GDPR block module - Disable/Enable module"
weight: 4
---

# GDPR block module - Disable/Enable module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search Prestashop Legal Assistant | The module page list should be displayed and Prestashop Legal Assistant module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable Prestashop Legal Assistant module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, disable it" button to confirm the reset of the module | * After loading, a green message "Disable action on module Prestashop Legal Assistant succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "Prestashop Legal Assistant" block | The "Prestashop Legal Assistant" block should not be displayed |
| Go back to BO > Module list page with Prestashop Legal Assistant module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module Prestashop Legal Assistant succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page > Scroll down in the homepage and search the "Prestashop Legal Assistant" block | The "Prestashop Legal Assistant" block should be displayed |
