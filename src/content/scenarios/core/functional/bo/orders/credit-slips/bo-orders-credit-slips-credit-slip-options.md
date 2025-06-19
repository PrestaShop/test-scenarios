---
title: "BO - Orders - Credit Slips - Credit Slip Options"
weight: 4
---

# BO - Orders - Credit Slips - Credit Slip Options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-768
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/03_creditSlips/04_creditSlipOptions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/credit-slips

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Credit slips" page | Credit slips page is displayed successfully |
| Set the new prefix and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page (created in the pre-condition) | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully |
| Add a partial refund product | the credit slip document is created successfully<br><br>The credit slip prefix is well changed |
| Go to Orders > "Credit slips" page | Credit slips page is displayed successfully |
| Delete the credit slip prefix | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | The status is changed successfully<br>The credit slip prefix is deleted successfully |
| Go to BO > Catalog > Products page and delete the product in the pre-condition | The product is well removed |
