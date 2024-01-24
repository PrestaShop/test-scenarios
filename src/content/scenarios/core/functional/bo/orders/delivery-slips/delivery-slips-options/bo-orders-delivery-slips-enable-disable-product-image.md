---
title: "BO - Orders - Delivery Slips - Enable/Disable Product Image"
weight: 3
---

# BO - Orders - Delivery Slips - Enable/Disable Product Image
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-772
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/04_deliverySlips/02_deliverySlipOptions/03_enableDisableProductImage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/delivery-slips

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Delivery slips page | page title contain 'Delivery Slips' |
| enable product image displayed in delivery slips | Successful update message is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :'] |
| update order status to shipped | order status is updated |
| download the delivery slip | PDF contain products images |
| Go to BO > Orders > Delivery slip page | The Delivery slip page is displayed |
| disable product image displayed in delivery slips | Successful update message is displayed |
| Go to FO and create order | Order confirmed page is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated] |
| download the delivery slip | PDF does not contain products images |
