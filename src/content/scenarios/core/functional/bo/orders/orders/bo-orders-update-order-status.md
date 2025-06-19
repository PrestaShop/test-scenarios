---
title: "BO - Orders - Update order status"
weight: 8
---

# BO - Orders - Update order status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-729
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/04_updateStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page | Orders listing is displayed correctly |
| Change last Order status to _Canceled_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails and in Advanced parameters > Email, an email titled Canceled has been sent to the customer :  pub@prestashop.com. |
| Go to FO and sign in with a customer | The "Your account" page is displayed |
| Click on "Order history and details" | The Order history page is displayed and check that the last status order is "Canceled" |
| Go to BO > Orders > Orders page | Orders page title is displayed correctly |
| Change last Order status to _Refunded_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails, an email titled refunded has been sent to the customer : pub@prestashop.com. |
| Change last Order status to _On backorder (not paid)_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails and in Advanced parameters > Email, an email titled On backorder (not paid) has been sent to the customer : pub@prestashop.com. |
| Change last Order status to _On backorder (paid)_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails and in Advanced parameters > Email, an email titled On backorder (paid) has been sent to the customer : pub@prestashop.com. |
| Change last Order status to _payment accepted_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails and in Advanced parameters > Email, an email titled Payment accepted has been sent to the customer :  pub@prestashop.com. |
| Click on "View invoice"<br>Check the invoice file | An invoice is downloaded<br>Check that all informations are visible in the invoice<br>-> Order reference<br>-> Delivery address<br>-> Customer<br>-> Total paid |
| Go to FO and sign in with a customer | The "Your account" page is displayed |
| Click on "Order history and details" | The Order history page is displayed and check that the last status order is "Payment Accepted" and an invoice is attached |
| Go to BO> Orders > Orders page | Orders listing is displayed correctly |
| Change last Order status to _Shipped_ with dropdown | A green alert "Successful update." is displayed and the order status is updated<br><br>Check your emails and in Advanced parameters > Email, an email titled Shipped has been sent to the customer : pub@prestashop.com. |
| Click on "View Delivery slip" | A delivery slip is downloaded |
| Go to FO and sign in with a customer | The "Your account" page is displayed |
| Click on "Order history and details" | The Order history page is displayed and check that the last status order is "Shipped" and the invoice is attached |
