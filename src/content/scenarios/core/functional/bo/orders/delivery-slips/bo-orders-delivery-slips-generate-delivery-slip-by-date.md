---
title: "BO - Orders - Delivery Slips - Generate Delivery Slip By Date"
weight: 1
---

# BO - Orders - Delivery Slips - Generate Delivery Slip By Date
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-769
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/04_deliverySlips/01_generateDeliverySlipByDate.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/delivery-slips

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully. The delivery slip document is created successfully |
| Go to Orders > "Delivery slips" page | Delivery slips page is displayed successfully |
| Click on generate pdf by date | The file is downloaded successfully |
| Enter a future date in From and To fields. Click on generate pdf by date | An error message is displayed. "No delivery slip was found for this period." |
