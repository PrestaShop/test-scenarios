---
title: "[Native] - Cash on delivery (COD) module - Uninstall/Install module"
weight: 2
---

# [Native] - Cash on delivery (COD) module - Uninstall/Install module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_cashondelivery | The module page list should be displayed and *Cash on delivery (COD)* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall Cash on delivery (COD) module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module ps_cashondelivery succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "ps_cashondelivery" folder should be still on it |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down on the page > Choose a product by clicking on "Quickview" > Click on "Add to cart" button on the product modal > Click on "Proceed to checkout" button on shopping cart modal | The Shopping cart page is well displayed with your product on it |
| Click on "Proceed to checkout" button on shopping cart page > Click on "Sign in" tab in "Personal information" step > Fill the form > Click on "Continue" button | * You are logged in<br> * The "Addresses" step is well displayed |
| Choose an address > Click on "Continue" button | The "Shipping method" step is well displayed |
| Choose a carrier > Click on "Continue" button | * The "Payment" step is well displayed<br> * The "Pay by Cash on Delivery" radio should be not displayed with other payments |
| Go back to BO > Module list page with ps_cashondelivery module displayed > Click on "Install" button at the right of the module | * After loading, a green message "Install action on module ps_cashondelivery succeeded." is displayed<br> * The module is installed, the button at the right of the module is displaying "Disable Mobile"<br> * In folders of you shop: yourshop/modules/, the "ps_cashondelivery" folder should be still on it |
| Go back to FO > Reload the page | * The "Payment" step is well displayed<br> * The "Pay by Cash on Delivery" radio is well displayed with other payments |
