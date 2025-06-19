---
title: "Wishlist module - Reset module"
weight: 2
---

# Wishlist module - Reset module
## Details
* **Component** : blockwishlist
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4227
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/blockwishlist/01_installation/04_resetModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Reset" option | A modal is open with:<br> * *Title*: "Reset module?"<br> * *Description*: "You're about to reset Wishlist in the same category module.<br>This will restore the defaults settings.<br>This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, reset it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed with 2 tabs<br> ** Configuration<br> ** Statistics<br> * "Wishlist default title" has "My wishlist" default content<br> * "Create button label" has "Create new list" default content<br> * "Wishlist page name" has "My Wishlists" default content |
| Change "Create button label" field from "Create new list" to "Create new list test" for example > Click on "Save" button | A successful message "Successful update" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Go to FO > Click on a "heart" icon of a product | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list test" |
| Go back to BO > Modules > Module Manager > Search blockwishlist module > Click on the button at the right of the module > Choose on the list "Reset" option | * The module page list should be displayed and module blockwishlist should be displayed on the list<br> * The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, reset it" button to confirm the reset of the module | After loading, a green message "Reset action on module blockwishlist succeeded." is displayed |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Create button label" has "Create new list" content, its default one |
| Go back to FO > Reload the page > Click on "heart" icon of a product | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" (its default content) |
