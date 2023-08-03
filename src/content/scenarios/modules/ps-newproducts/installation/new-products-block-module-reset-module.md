---
title: "New products block module - Reset module"
weight: 4
---

# New products block module - Reset module
## Details
* **Component** : ps_newproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4028

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_newproducts | The module page list should be displayed and *New products block* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset New products block module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Products to display" field is set to 8 by default<br> * "Number of days for which the product is considered 'new'" field is set to 20 by default |
| Change "Products to display" field from 8 to 10 for example > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block should have 10 products displayed |
| Go back to BO > Module list page with ps_newproducts module displayed > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module ps_newproducts should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module ps_newproducts succeeded." is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * The "Products to display" field is reseted to 8 (default value of the module) |
| Go back to FO > Reload the page > Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block should have 8 products displayed |
