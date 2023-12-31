---
title: "Category products module - Reset module"
weight: 3
---

# Category products module - Reset module
## Details
* **Component** : ps_categoryproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4211

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset Products in the same category module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Display products' prices" is enabled by default<br> * "Number of product to display" field is set to 16 by default |
| Change "Number of product to display" field from 16 to 2 for example > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Go to FO > Click on a product | The product page should be displayed and if you scroll down, the "Other products in the same category :" block is displayed with 2 products |
| Go back to BO > Module list page with ps_categoryproducts module displayed > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module ps_categoryproducts should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module ps_categoryproducts succeeded." is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * The "Number of product to display" field is reseted to 16 (default value of the module) |
| Go back to FO > Reload the page of the product | The "Other products in the same category :" block is displayed with 6 products |