---
title: "Faceted search module - Reset module"
weight: 6
---

# Faceted search module - Reset module
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4259

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset Faceted search module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module > Click on "Edit" in Filters templates | The "Configure" page of the template is displayed |
| Disable a filter (Product price) > Click on "Save" button | * A successful message "Your filter "My template XXXXX" was updated successfully." is displayed<br> * "Product price filter" switch button should be disabled |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on a category in main menu | * "Category" page is displayed with faceted search on the left<br> * Prices filter is should be not displayed |
| Go back to BO > Module list page with ps_facetedsearch module displayed > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module ps_facetedsearch should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module ps_newproducts succeeded." is displayed |
| Click on "Configure" button at the right of the module > Click on "Edit" in Filters templates | * The "Configure" page of the template is displayed<br> * "Product price filter" switch button should be enabled |
| Go back to FO > Reload the cateogry page | Prices filter is should be displayed on faceted search |