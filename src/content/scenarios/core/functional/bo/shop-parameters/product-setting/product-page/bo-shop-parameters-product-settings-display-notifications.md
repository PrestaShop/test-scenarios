---
title: "BO - Shop Parameters - Product Settings - Display notifications"
weight: 4
---

# BO - Shop Parameters - Product Settings - Display notifications
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8394
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/02_productPage/06_displayNotifications.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings | Display notifications if the product is already in the cart is on YES |
| Go to FO > Open the product : ​MUG THE BEST IS YET TO COME, add to cart and continue shopping | h4. Product successfully added to your shopping cart |
| Go to home page | home page displayed |
| Open the product : ​MUG THE BEST IS YET TO COME | Product page displayed<br><br>notification : Your cart contains 1 of these products |
| return to BO > Shop Parameters > Product Settings > Display notifications if the product is already in the cart = NO and save | Update successful |
| refresh the FO | Notication is no longer visible. |
