---
title: "FO - User account - Order history - Order details - Download invoice from order details"
weight: 3
---

# FO - User account - Order history - Order details - Download invoice from order details
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8341

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click on status label of an order ID 3 - UOYEVOLI > Change "Payment error" to "Delivered" status on the list | A successful message "Successful update." is displayed<br>The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header > Orders | "Order history" page is well displayed |
| Click on the "Details" link for the Order with reference UOYEVOLI | The "Order details" page is well displayed |
| Click on the "Download your invoice as a PDF file." link | Invoice .pdf file is downloaded on your computer |
