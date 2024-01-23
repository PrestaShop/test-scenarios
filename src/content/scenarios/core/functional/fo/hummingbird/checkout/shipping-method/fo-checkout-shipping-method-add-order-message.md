---
title: "FO - Checkout - Shipping method - Add order message"
weight: 1
---

# FO - Checkout - Shipping method - Add order message
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7024

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Log into your customer account | You are logged in |
| Add a product to the cart > Proceed to checkout > Proceed to checkout  > Choose an address > Continue to Shipping | Step 3 - Shipping method is displayed |
| Add a comment about your order > Continue to Payment | Step 4 - Payment is displayed |
| Click on Step 3 Shipping method on the progress bar > Select another carrier & edit message > Continue to Payment | Step 4 - Payment is displayed |
| Click on edit button of Step 3 - Shipping method | See that the message is well saved and has not changed |
| Continue > Choose a payment method > Agree to terms and conditions > Place order | Your order is confirmed |
| Click on your customer account in top-right corner > Your account > Order history and details > Click Details on the last order > Scroll down to block Messages | See your message is displayed correctly |
