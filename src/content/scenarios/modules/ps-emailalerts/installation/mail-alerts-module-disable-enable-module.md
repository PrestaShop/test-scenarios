---
title: "Mail alerts module - Disable/Enable module"
weight: 8
---

# Mail alerts module - Disable/Enable module
## Details
* **Component** : ps_emailalerts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4130

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable Mail alerts module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, disable it" button to confirm the reset of the module | * After loading, a green message "Disable action on module ps_emailalerts succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "POPULAR PRODUCTS" block > Click on "All products" link | The "Home" category page is displayed |
| Scroll down on this page > Click on the second page of the list > Find your product created (pre-condition) with 0 on quantity > Click on it | * The product page details is displayed<br> * Mail alerts block on the page should be not displayed |
| Go back to BO > Module list page with ps_emailalerts module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module ps_emailalerts succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page | The Mail alerts block should be displayed below the share buttons with:<br> * an empty email field<br> * a "Notify me when available" button |
