---
title: "BO - Order details - Change order status with dropdown"
weight: 9
---

# BO - Order details - Change order status with dropdown
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-744
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/10_changeStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page and view last order created | The Order view page is well displayed and the Update status button is disabled |
| Select the same status | The button "Update status" is still disabled |
| Select status 'Canceled' and Click on "Update status" | An alert "Successful update." is displayed and check:<br><br>Number status = +1 => 2<br><br>Status = canceled |
| Select status "payment accepted" and click on "Update Status" | An alert "Successful update." is well displayed:<br><br>Two new buttons are displayed "View order" + "Partial refund"<br><br>Check the number of statuses = +1 => 3<br><br>Check the status = payment accepted<br><br>Check there is an invoice generated |
| Click on View invoice | An invoice is downloaded |
| Select status "shipped" and click on "Update Status" | An alert "Successful update." is well displayed:<br><br>A new button "View delivery slip" is displayed<br><br>Check the number of statuses = +1 =>4<br><br>Check the status = Shipped<br><br>Check that the delivery slip is generated |
| Click on "View delivery slip" | a delivery slip is doownloaded |
