---
title: "FO - Consult return details"
weight: 3
---

# FO - Consult return details
## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order (previously placed with the pre-condition) > Change "Awaiting XX payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | "Your account" page is well displayed |
| Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed<br> * All informations about last order are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links) |
| Choose the order with the "Delivered" status and click on the "Details" link in the last column | * The "Order details" page is well displayed<br> * All the informations about the order are displayed |
| Go down to the list of product ordered > Check the product you want to return and the quantity (if it's more than 1) > Add a message on the "Merchandise return" section > Click on "Request a return" | * The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account<br> * All informations of the return are displayed (number of order / ID of Return / Package status / Date issued / Returns form) |
| Click on return "link" in "Return" column | * The return details page is well displayed<br> * All main informations are displayed:<br> ** message to inform of the status of the return<br> **  reference and date of the return<br> ** Content with the current status<br> ** List of items ti be return with the name / combinations / reference and quantity |
| *Case 1: Waiting confirmation of the return*<br>All informations are displayed with a message and the current status | * A information message "You must wait for confirmation before returning any merchandise." is displayed<br> * In the content, the current status of the merchandise return is "Waiting for confirmation" |
| Go to BO > Customer Service > Merchandise Returns page, edit the last return to "Waiting for package" status and save | An alert "Successful update." is well displayed |
| *Case 2: Waiting for package*<br><br>Go to FO > Click on your user account name in the header > Click on the "Merchandise returns" tab and Click on the return "link" in the "Return" column<br><br>All informations are displayed for the waiting package | * No information message is displayed<br> * In the content, the current status of the merchandise return is "Waiting for package"<br> * A new block "Reminder" is appeared with content and links about the "returns form" and "contact page" |
| Go to BO > Customer Service > Merchandise Returns page, edit the last return to "Package received" status and save | An alert "Successful update." is well displayed |
| *Case 3:* *Package received*<br><br>Go to FO > Click on your user account name in the header > Click on the "Merchandise returns" tab and Click on the return "link" in the "Return" column<br><br>All informations are displayed for the received package | * No information message is displayed<br> * In the content, the current status of the merchandise return is "Package received" |
| Go to BO > Customer Service > Merchandise Returns page, edit the last return to "Return denied" status and save | An alert "Successful update." is well displayed |
| *Case 4:* *Return denied*<br><br>Go to FO > Click on your user account name in the header > Click on the "Merchandise returns" tab and Click on the return "link" in the "Return" column<br><br>All informations are displayed for the denied return | * No information message is displayed<br> * In the content, the current status of the merchandise return is "Return denied" |
| Go to BO > Customer Service > Merchandise Returns page, edit the last return to "Return completed" status and save | An alert "Successful update." is well displayed |
| *Case 5:* *Return completed*<br><br>Go to FO > Click on your user account name in the header > Click on the "Merchandise returns" tab and Click on the return "link" in the "Return" column<br><br>All informations are displayed for the completed return | * No information message is displayed<br> * In the content, the current status of the merchandise return is "Return completed" |
