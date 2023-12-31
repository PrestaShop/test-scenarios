---
title: "FO - User account - Merchandise Returns - Consult merchandise returns list"
weight: 1
---

# FO - User account - Merchandise Returns - Consult merchandise returns list
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1216

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | * "Your account" page is well displayed with all tabs linked to your account<br> * A merchandise returns tab is displayed |
| *Case 1: No merchandise return has been requested*<br> Click on "Merchandise returns" tab | * The "Merchandise returns" page is displayed with an empty list of merchandise returns of the customer account<br> * An information message "You have no merchandise return authorizations." is displayed |
| *Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order (previously placed with the pre-condition) > Change "Awaiting XX payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO & Sign in | The home page is well displayed |
| *Case 2: Merchandise return has been requested*<br>Click on "Order history and details" tab of your account > Choose the order with the "Delivered" status and click on the "Details" link in the last column | * The "Order details" page is well displayed<br> * All the informations about the order are displayed |
| Go down to the list of product ordered > Check the product you want to return and the quantity (if it's more than 1) > Add a message on the "Merchandise return" section > Click on "Request a return" | * The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account<br> * All informations of the return are displayed (number of order / ID of Return / Package status / Date issued / Returns form) |
| Click on order "link" in "Order" column | The order details page is well displayed |
