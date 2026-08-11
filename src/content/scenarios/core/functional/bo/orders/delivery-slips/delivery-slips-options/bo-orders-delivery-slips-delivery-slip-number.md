---
title: "BO - Orders - Delivery Slips - Delivery Slip Number"
weight: 3
---

# BO - Orders - Delivery Slips - Delivery Slip Number
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7543
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/04_deliverySlips/02_deliverySlipOptions/02_deliverySlipNumber.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/delivery-slips

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Delivery slips page | page title contain 'Delivery Slips' |
| change the Delivery slip number | Successful update message is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated<br>delivery slips file name contain the "delivery slips number" |
