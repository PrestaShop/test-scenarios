---
title: "Change order status with dropdown"
weight: 9
---

# Change order status with dropdown
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page and view last order created | The Order view page is well displayed and the Update status button is disabled |
| Select the same status | The button "Update status" is still disabled |
| Select Canceled and Click on "Update status" | An alert "Successful update." is displayed and check:<br><br>Number status = +1 => 2<br><br>Status = canceled |
| Select status "payment accepted" and click on "Update Status" | An alert "Successful update." is well displayed:<br><br>Two new buttons are displayed "View order" + "Partial refund"<br><br>Check the number of statuses = +1 => 3<br><br>Check the status = payment accepted<br><br>Check there is an invoice generated |
| Click on View invoice | An invoice is downloaded |
| Select status "shipped" and click on "Update Status" | An alert "Successful update." is well displayed:<br><br>A new button "View delivery slip" is displayed<br><br>Check the number of statuses = +1 =>4<br><br>Check the status = Shipped<br><br>Check that the delivery slip is generated |
| Click on "View delivery slip" | a delivery slip is doownloaded |
