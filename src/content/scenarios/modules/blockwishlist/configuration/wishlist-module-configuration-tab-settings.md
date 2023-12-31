---
title: "Wishlist module - Configuration tab settings"
weight: 3
---

# Wishlist module - Configuration tab settings
## Details
* **Component** : blockwishlist
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4234

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * "Configure" page is displayed with 2 tabs:<br> ** Configuration<br> ** Statistics<br> * The page is opened on "Configuration" tab with:<br> ** "Wishlist default title" has "My wishlist" default content<br> ** "Create button label" has "Create new list" default content<br> ** "Wishlist page name" has "My Wishlists" default content |
| Update all fields with another content > Click on "Save" button | A successful message "Successful update" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "Sign in" link in the header > Fill the form with your credentials > Click on "Sign in" button | * You are logged in<br> * Home page is displayed |
| Click on your username in header | * "Your account" page is displayed<br> * The "My wishlists" tab is well renamed by your new content: "My wishlists hello" |
| Click on your wishlist tab | You wishlist list page is displayed with updated content:<br> * "My wishlist" is not changed (unfortunately)<br> * "Create new list" link became "Create new list test"<br> * "My wishlists" became "My wishlists hello" on title and breacrumb of the page |
| Click on "my store" logo to back to the homepage > Choose a product and click on its "heart" icon | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist" must be changed by "My wishlist title" (unfortunately not)<br> * Link: "Create new list" has changed by "Create new list test" |