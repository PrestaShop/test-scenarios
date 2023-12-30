---
title: "BO - Orders - Delivery Slips - Delivery Slip Number"
weight: 2
---

# BO - Orders - Delivery Slips - Delivery Slip Number
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-771
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/04_deliverySlips/02_deliverySlipOptions/02_deliverySlipNumber.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Delivery slips page | page title contain 'Delivery Slips' |
| change the Delivery slip number | Successful update message is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated<br>delivery slips file name contain the "delivery slips number" |