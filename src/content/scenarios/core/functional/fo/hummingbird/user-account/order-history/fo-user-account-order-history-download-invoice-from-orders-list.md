---
title: "FO - User account - Order history : Download invoice from orders list"
weight: 1
---

# FO - User account - Order history : Download invoice from orders list
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8337
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/02_orderHistory/03_downloadInvoice.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click on status label of order ID 5 - KHWLILZLL > Change "Awaiting bank wire payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO > Sign In to your user account > Click on your account > Orders | See the order KHWLILZLL has an invoice available |
| Click on the PDF logo | Invoice .pdf file is downloaded on your computer |
