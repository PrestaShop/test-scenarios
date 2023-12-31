---
title: "FO - Checkout - Shipping method - Add order message"
weight: 1
---

# FO - Checkout - Shipping method - Add order message
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1307
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/11_checkout/03_shippingMethods/01_addOrderMessage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Log into your customer account | You are logged in |
| Add a product to the cart > Proceed to checkout > Proceed to checkout  > Add an address > Continue | Step 3 - Shipping method is displayed |
| Add a comment about your order > Continue | Step 4 - Payment is displayed |
| Click on edit button of Step 3 - Shipping method > Select another carrier & edit message > Continue | Step 4 - Payment is displayed |
| Click on edit button of Step 3 - Shipping method | See that the message is well saved and has not changed |
| Continue > Choose a payment method > Agree to terms and conditions > Place order | YOUR ORDER IS CONFIRMED |
| Click on your account in top-right corner > Order history and details > Details > Scroll down to block Messages | See your message is displayed correctly |
