---
title: "Category products module - Uninstall/Install module"
weight: 5
---

# Category products module - Uninstall/Install module
## Details
* **Component** : ps_categoryproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4216

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall Products in the same category module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module ps_categoryproducts succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "ps_categoryproducts" folder should be still on it |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on a product | The product page should be displayed and if you scroll down, the "Other products in the same category :" block is not displayed |
| Go back to BO > Module list page with ps_categoryproducts module displayed > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module ps_categoryproducts succeeded." is displayed<br> * The module is installed, the button at the right of the module is displaying "Configure"<br> * In folders of you shop: yourshop/modules/, the "ps_categoryproducts" folder should be still on it |
| Go back to FO > Reload the page of the product | The "Other products in the same category :" block should be displayed |
