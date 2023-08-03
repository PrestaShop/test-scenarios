---
title: "Mail alerts module - Merchant notifications - Enable/Disable new order"
weight: 6
---

# Mail alerts module - Merchant notifications - Enable/Disable new order
## Details
* **Component** : ps_emailalerts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4121

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "New order" is set to "Yes" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down on the page > Choose a product by clicking on "Quickview" > Click on "Add to cart" button on the product modal > Click on "Proceed to checkout" button on shopping cart modal | The Shopping cart page is well displayed with your product on it |
| Click on "Proceed to checkout" button on shopping cart page > Click on "Sign in" tab in "Personal information" step > Fill the form > Click on "Continue" button | * You are logged in<br> * The "Addresses" step is well displayed |
| Choose an address > Click on "Continue" button | The "Shipping method" step is well displayed |
| Choose a carrier > Click on "Continue" button | The "Payment" step is well displayed |
| Choose a payment > Check the "terms of service" checkbox > Click on "Place order" button | The "Order confirmation" page is displayed |
| Go to your email (pre-condition) > Check email received | * the "Order confirmation" email is sent<br> * the "Payment" chosen email is sent<br> * the "New order : #number - ID" email is sent |
| Go back to BO on "Configure" page of the module *Mail alerts* > Set to "No" the "New order" switch button in the section > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * Switch button is set to "No" and grey |
| Go back to FO > Click on logo to go back to home page > replace an order (steps from 4 to 8) | The "Order confirmation" page is displayed |
| Go to your email > Check email received | * the "Order confirmation" email is sent<br> * the "Payment" chosen email is sent<br> * the "New order : #number - ID" email must not be sent |
