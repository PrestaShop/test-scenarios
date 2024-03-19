---
title: "FO - User account - Order history - Order details - Request a merchandise return from order details"
weight: 2
---

# FO - User account - Order history - Order details - Request a merchandise return from order details
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8342
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/02_orderHistory/01_orderDetails/03_requestMerchandiseReturn.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click on status label of the order ID 4 - FFATNOMMJ > Change "Awaiting check payment" to "Delivered" status on the list | A successful message "Successful update." is displayed<br>The status label of the order is well changed to "Delivered" |
| Go to FO > Sign In to your customer account > Click on Orders | "Order history" page is well displayed |
| Click on the "Details" link for the order with FFATNOMMJ reference | The "Order details" page is well displayed |
| Scroll down to the Products block > Check the product you want to return > Add a message on the "Merchandise return" section > Click on "Request a return" | The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account |
