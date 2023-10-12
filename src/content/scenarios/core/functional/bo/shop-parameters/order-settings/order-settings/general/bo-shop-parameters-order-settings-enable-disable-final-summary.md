---
title: "BO - Shop Parameters - Order Settings - Enable / disable final summary"
weight: 1
---

# BO - Shop Parameters - Order Settings - Enable / disable final summary
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1049
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/01_orderSettings/general/01_enableFinalSummary.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings | Enable final summary is disabled |
| Go to FO > Add any product to the cart > Proceed to checkout | The checkout process is as usual<br>Once the checkout is done, the message YOUR ORDER IS CONFIRMED is displayed |
| Go to BO > Shop Parameters > Order Settings > Enable the option Enable final summary > Save | Message Update successful is displayed |
| Go to FO > Add any product to the cart > Proceed to checkout | On the Step 4 of checkout process, the block "Please check your order before payment" is displayed with information about Addresses, Shipping Method and ORDER ITEMS |
| Finish Checkout process | Message YOUR ORDER IS CONFIRMED is displayed |
