---
title: "Cash on delivery (COD) module - Disable/Enable module"
weight: 5
---

# Cash on delivery (COD) module - Disable/Enable module
## Details
* **Component** : ps_cashondelivery
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4071

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_cashondelivery | The module page list should be displayed and *Cash on delivery (COD)* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable Cash on delivery (COD) module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, disable it" button to confirm the reset of the module | * After loading, a green message "Disable action on module ps_cashondelivery succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down on the page > Choose a product by clicking on "Quickview" > Click on "Add to cart" button on the product modal > Click on "Proceed to checkout" button on shopping cart modal | The Shopping cart page is well displayed with your product on it |
| Click on "Proceed to checkout" button on shopping cart page > Click on "Sign in" tab in "Personal information" step > Fill the form > Click on "Continue" button | * You are logged in<br> * The "Addresses" step is well displayed |
| Choose an address > Click on "Continue" button | The "Shipping method" step is well displayed |
| Choose a carrier > Click on "Continue" button | * The "Payment" step is well displayed<br> * The "Pay by Cash on Delivery" radio should not be displayed with other payments |
| Go back to BO > Module list page with ps_cashondelivery module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module ps_cashondelivery succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Disable Mobile" |
| Go back to FO > Reload the page | * The "Payment" step is displayed<br> * The "Pay by Cash on Delivery" radio should be displayed with other payments |
