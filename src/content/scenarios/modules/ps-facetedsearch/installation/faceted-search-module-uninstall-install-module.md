---
title: "Faceted search module - Uninstall/Install module"
weight: 2
---

# Faceted search module - Uninstall/Install module
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3227

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall Faceted search module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module ps_facetedsearch succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "ps_facetedsearch" folder should be still on it |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on a category in main menu | "Category" page is displayed without faceted search on the left |
| Go back to BO > Module list page with ps_facetedsearch module displayed > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module ps_facetedsearch succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Configure"<br> * In folders of you shop: yourshop/modules/, the "ps_facetedsearch" folder should be still on it |
| Go back to FO > Reload category page | "Category" page is displayed with faceted search on the left |