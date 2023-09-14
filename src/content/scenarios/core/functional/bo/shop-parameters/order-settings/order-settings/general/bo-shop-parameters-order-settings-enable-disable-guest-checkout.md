---
title: "BO - Shop Parameters - Order Settings - Enable / disable guest checkout"
weight: 2
---

# BO - Shop Parameters - Order Settings - Enable / disable guest checkout
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1050

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings | Option Enable guest checkout is already enabled |
| Go to FO > Add any product to the cart > Proceed to checkout | See in Step 1 the Order as a guest option |
| Fill the fields | See the option available : Create an account (optional) And save time on your next order! <br>And the password field optional |
| Proceed to checkout | YOUR ORDER IS CONFIRMED |
| Go back to BO > Shop Parameters > Order Settings > Disable the Guest checkout option > Save | Message Update successful is displayed |
| Go to FO > Add any product to the cart > Proceed to checkout | In Step 1, you need to create an account to proceed to checkout : Create an account |
| Fill the fields in Step 1 > Continue | Step 2 is displayed |
| Finish the checkout process | YOUR ORDER IS CONFIRMED |
