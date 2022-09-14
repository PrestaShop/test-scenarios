---
title: "[Native] - Mail alerts module - Merchant notifications - Enable/Disable returns"
weight: 9
---

# [Native] - Mail alerts module - Merchant notifications - Enable/Disable returns
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Returns" is set to "Yes" |
| Go to Orders > Orders > Change status to "Delivered" of the order just placed (pre-condition) by clicking on the status list | * After page loading, a successful message "Successful update." is displayed<br> * The status changed from your payment status to "Delivered" |
| Go to FO > Click on username account on the header | Your account page is displayed |
| Click on "Order history and details tab" > Click on "Details" link on the first order (the one withe "Delivered status") | The "Order details" page of the order is displayed |
| Scroll down and check the product you want to return and a quantity > Add a message on "Merchandise return" section > Click on "Request a return" button | * The "Merchandise returns" page is displayed<br> * A list of customer's return is displayed with all details (order's id / return's id / package status / date issued / returns form) |
| Go to your email (pre-condition) > Check email received | The "New return from order #number - ID" email is sent |
| Go back to BO on "Configure" page of *Mail alerts* module > Set to "No" the "Returns" switch button in the section > Click on "Save" button | A successful message "Settings updated successfully" is displayed |
| Go to Orders > Orders > Change status to "Delivered" of an order by clicking on the status list | * After page loading, a successful message "Successful update." is displayed<br> * The status changed from your payment status to "Delivered" |
| Go to FO > Click on "Your account" link in breadcrumb of "Merchandise returns" page | Your account page is displayed |
| Click on "Order history and details tab" > Click on "Details" link on another order with "Delivered" status than the first one | The "Order details" page of the order is displayed |
| Scroll down and check the product you want to return and a quantity > Add a message on "Merchandise return" section > Click on "Request a return" button | * The "Merchandise returns" page is displayed<br> * A list of customer's return is displayed with all details (order's id / return's id / package status / date issued / returns form) |
| Go to your email (pre-condition) > Check email received | The "New return from order #number - ID" email must not be sent |
