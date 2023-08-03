---
title: "Wishlist module - Disable Mobile/Enable Mobile module"
weight: 3
---

# Wishlist module - Disable Mobile/Enable Mobile module
## Details
* **Component** : blockwishlist
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4226

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable Mobile" option | * After loading, a green message "Disable mobile action on module blockwishlist succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Configure" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Scroll down on the page | All products should not have a "heart" icon on top left of their images |
| Click on a product | * The product page should be displayed<br> * "Heart" icon should not be displayed beside the "Add to cart" button |
| Go back to BO > Module list page with blockwishlist module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module blockwishlist succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page of the product | "Heart" icon should be displayed beside the "Add to cart" button |
| Click on "My store" logo > Scroll down on the page | All products should have a "heart" icon on top left of their images |
