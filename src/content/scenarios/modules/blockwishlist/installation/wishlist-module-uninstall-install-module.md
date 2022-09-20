---
title: "Wishlist module - Uninstall/Install module"
weight: 6
---

# Wishlist module - Uninstall/Install module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall Wishlist module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module blockwishlist succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "blockwishlist" folder should be still on it |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down on the page | All products should not have a "heart" icon on top left of their images |
| Click on a product | * The product page should be displayed<br> * "Heart" icon should not be displayed beside the "Add to cart" button |
| Go back to BO > Module list page with ps_categoryproducts module displayed > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module blockwishlist succeeded." is displayed<br> * The module is installed, the button at the right of the module is displaying "Configure"<br> * In folders of you shop: yourshop/modules/, the "blockwishlist" folder should be still on it |
| Go back to FO > Reload the page of the product | "Heart" icon should be displayed beside the "Add to cart" button |
| Click on "My store" logo > Scroll down on the page | All products should have a "heart" icon on top left of their images |
