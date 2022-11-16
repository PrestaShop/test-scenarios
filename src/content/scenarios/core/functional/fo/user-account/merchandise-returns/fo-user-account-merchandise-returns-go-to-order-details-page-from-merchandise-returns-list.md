---
title: "FO - User account - Merchandise Returns - Go to order details page from merchandise returns list"
weight: 2
---

# FO - User account - Merchandise Returns - Go to order details page from merchandise returns list
## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order > Change "Awaiting XX payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| *Case 2: Change status in order details page in BO*<br>Go to BO > Orders > Orders > Click on an order | The order details page is well displayed |
| Click on status list in top of the page > Choose "Delivered" in the list > Click on the "Update status" | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | * "Your account" page is well displayed with all tabs linked to your account<br> * A merchandise returns tab is displayed |
| Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links)<br> * At least one order should have "Delivered" status and an invoice to download<br> * For the status "Awaiting XX payment" for example, there is no invoice icon on the column |
| Choose the order with the "Delivered" status and click on the "Details" link in the last column | * The "Order details" page is well displayed<br> * All the informations about the order are displayed |
| Go down to the list of product ordered > Check the product you want to return and the quantity (if it's more than 1) > Add a message on the "Merchandise return" section > Click on "Request a return" | * The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account<br> * All informations of the return are displayed (number of order / ID of Return / Package status / Date issued / Returns form) |
| Click on order "link" in "Order" column | The order details page is well displayed |
