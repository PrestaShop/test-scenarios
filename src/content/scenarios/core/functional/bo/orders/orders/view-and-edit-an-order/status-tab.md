---
title: "Status tab"
weight: 3
---

# Status tab
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders page and view last order created | The Order view page is well displayed<br><br>Check the number of status = 1<br><br>The Order note is not opened by default (exist from PS1.7.8) |
| Click on Resend email | An alert "The message was successfully sent to the customer." is displayed and the email is well received inbox |
| Click on "Update status without selecting other sattus" | An alert "The order has already been assigned this status." is displayed |
| Select Canceled and Click on "Update status" | An alert "Successful update." is displayed and check:<br><br>Number status = +1 => 2<br><br>Status = canceled<br><br>Employee name & lastname => ok <br><br>Date => ok |
| Sign out and sing in with another emplyee | The dashboard is well displayed with the new employee |
| Go to BO > Orders > View the last Order > change the status to payment accepted in the status block | An alert "Successful update." is well displayed:<br><br>Check the number of statuses = +1 => 3<br><br>Check the name & first name of the new employee<br><br>Check the status = payment accepted |
| In the status block > change status to shipped | An alert "Successful update." is well displayed:<br><br>Check the number of statuses = +1 =>4<br><br>Check the status = Shipped |
| Check the Order note text area | The Ordr note text area is not visible by default |
| Click on "+" button | The order note text area is visible |
| Got to BO > Orders > Order list page and View first Order created by John Doe | The Orders page is displayed and the Order details page  1 is displayed |
| In the status block Press the "+" button to add Order note, set an order note and save | A green alert "Successful update." is displayed |
| Got to BO > Orders > Order list page and View the Order created by new customer | The Orders page is displayed, the Order details page is displayed and the order note doesn't exist |
| Go back to BO > Orders > Order list page and View first Order created by John Doe | The Orders page is displayed, the Order details page 1 is displayed and the order note is displayed |
| Delete order note not and click on "Save" | A "Successful update." alert is displayed |
