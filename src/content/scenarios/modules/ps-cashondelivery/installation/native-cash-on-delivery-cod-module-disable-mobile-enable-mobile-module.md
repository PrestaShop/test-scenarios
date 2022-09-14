---
title: "[Native] - Cash on delivery (COD) module - Disable Mobile/Enable Mobile module"
weight: 6
---

# [Native] - Cash on delivery (COD) module - Disable Mobile/Enable Mobile module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_cashondelivery | The module page list should be displayed and *Cash on delivery (COD)* module should be displayed on the list |
| Click on "Disable Mobile" button at the right of the module | * After loading, a green message "Disable mobile action on module ps_cashondelivery succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Enable Mobile" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Reload the page > Scroll down on the page > Choose a product by clicking on "Quickview" > Click on "Add to cart" button on the product modal > Click on "Proceed to checkout" button on shopping cart modal | The Shopping cart page is well displayed with your product on it |
| Click on "Proceed to checkout" button on shopping cart page > Click on "Sign in" tab in "Personal information" step > Fill the form > Click on "Continue" button | * You are logged in<br> * The "Addresses" step is well displayed |
| Go back to BO > Module list page with ps_newproducts module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module ps_newproducts succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Choose an address > Click on "Continue" button | The "Shipping method" step is well displayed |
| Choose a carrier > Click on "Continue" button | * The "Payment" step is well displayed<br> * The "Pay by Cash on Delivery" radio should not be displayed with other payments |
| Go back to BO > Module list page with ps_cashondelivery module displayed > Click on "Enable Mobile button at the right of the module | * After loading, a green message "Enable action on module ps_cashondelivery succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Disable Mobile" |
| Go back to FO > Reload the page | * The "Payment" step is displayed<br> * The "Pay by Cash on Delivery" radio should be displayed with other payments |
