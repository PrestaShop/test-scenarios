---
title: "BO - Orders - Delivery Slips - Delivery Slip Prefix"
weight: 1
---

# BO - Orders - Delivery Slips - Delivery Slip Prefix
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-770
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/04_deliverySlips/02_deliverySlipOptions/01_deliverySlipPrefix.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Delivery slips" page | Delivery slips page is displayed successfully |
| Change the delivery prefix and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>The Delivery prefix is changed successfully |
| Go to Orders > "Delivery slips" page | Delivery slips page is displayed successfully |
| Back to the default prefix value and save the form] | The validation message is displayed successfully<br>"Update successful" |