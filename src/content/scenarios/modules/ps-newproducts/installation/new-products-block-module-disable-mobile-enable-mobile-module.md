---
title: "New products block module - Disable Mobile/Enable Mobile module"
weight: 6
---

# New products block module - Disable Mobile/Enable Mobile module
## Details
* **Component** : ps_newproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4032

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_newproducts | The module page list should be displayed and *New products block* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable Mobile" option | * After loading, a green message "Disable mobile action on module ps_newproducts succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Configure" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Reload the page > Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block should not be displayed |
| Go back to BO > Module list page with ps_newproducts module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module ps_newproducts succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page > Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block should be displayed |