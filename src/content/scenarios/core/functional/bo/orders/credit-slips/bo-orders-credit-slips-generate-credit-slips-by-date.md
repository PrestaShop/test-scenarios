---
title: "BO - Orders - Credit Slips - Generate Credit Slips By Date"
weight: 3
---

# BO - Orders - Credit Slips - Generate Credit Slips By Date
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-767
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/03_creditSlips/02_generateCreditSlipsByDate.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Open the first order page (created in the pre-condition) | Order page is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Add a partial refund product | the credit slip document is created successfully |
| Go to Orders > "Credit slips" page | Credit slips page is displayed successfully |
| Generate PDF file by date | The file exists in the disk |
| Put a future date in From and To field | An error message is displayed<br>"No invoice has been found for this period." |
