---
title: "BO - Shop Parameters - Order Settings - Minimum purchase total required in order to validate the order"
weight: 4
---

# BO - Shop Parameters - Order Settings - Minimum purchase total required in order to validate the order
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1052

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings | See Minimum purchase total required in order to validate the order option is disabled (0.00) |
| Edit the Minimum purchase total required in order to validate the order : 60.00 > Save | Message Update successful is displayed |
| Go to FO > Add The adventure begins Framed poster product to your cart > Proceed to checkout | In the cart, see the following block displayed : A minimum shopping cart total of €60.00 (tax excl.) is required to validate your order. Current cart total is €29.00 (tax excl.). |
| Add 1 quantity to your cart | In the cart, see the following block displayed : A minimum shopping cart total of €60.00 (tax excl.) is required to validate your order. Current cart total is €58.00 (tax excl.). |
| Add another quantity to your cart | The button Proceed to checkout is now displayed |
| Proceed to checkout | h3. YOUR ORDER IS CONFIRMED |
| Edit the Minimum purchase total required in order to validate the order : 0.00 > Save | Message Update successful is displayed |
| Add 1 product to your cart > Proceed to checkout | In the shopping cart, see that the button Proceed to checkout is always displayed |
