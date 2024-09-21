---
title: "BO - Shop Parameters - Product Settings - Display notifications"
weight: 6
---

# BO - Shop Parameters - Product Settings - Display notifications
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9807

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings | Display notifications if the product is already in the cart is on YES |
| Go to FO > Open the product : ​MUG THE BEST IS YET TO COME, add to cart and continue shopping | h4. Product successfully added to your shopping cart |
| Go to home page | home page displayed |
| Open the product : ​MUG THE BEST IS YET TO COME | Product page displayed<br><br>notification : Your cart contains 1 of these products |
| return to BO > Shop Parameters > Product Settings > Display notifications if the product is already in the cart = NO and save | Update successful |
| refresh the FO | Notication is no longer visible. |
