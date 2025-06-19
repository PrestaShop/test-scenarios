---
title: "Check FO pages in the checkout process"
weight: 3
---

# Check FO pages in the checkout process
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10076
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/audit/FO/hummingbird/03_cart.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Home Page | The home page is displayed<br><br>No JS errors are triggered |
| Click on the "Sign in" link | The "Log in" page  is displayed<br><br>No JS errors are triggered |
| Sign in with the customer "John DOE" | The customer is connected<br><br>No JS errors are triggered |
| Click on the product "Hummingbird printed t-shirt" | The product page is diplayed<br><br>No JS errors are triggered |
| Click on the button "Add to cart" | The modal is displayed <br><br>No JS errors are triggered |
| Click on the button "Proceed to checkout" | The cart page is displayed<br><br>No JS errors are triggered |
| Click on the button "Proceed to checkout" | The checkout page is displayed<br><br>The step "Addresses" is active<br><br>No JS errors are triggered |
| Click on the button "Continue" | The checkout page is displayed<br><br>The step "Shipping Method" is active<br><br>No JS errors are triggered |
| Click on the button "Continue" | The checkout page is displayed<br><br>The step "Payment" is active<br><br>No JS errors are triggered |
| Choose the payment "Pay by bank wire"<br><br>Click on the checkbox "I agree to the terms of service and will adhere to them unconditionally."<br><br>Click on the button "Place order" | The order confirmation page is displayed<br><br>No JS errors are triggered |
