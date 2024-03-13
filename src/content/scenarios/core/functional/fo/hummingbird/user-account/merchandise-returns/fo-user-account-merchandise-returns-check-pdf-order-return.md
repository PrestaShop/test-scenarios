---
title: "FO - User account - Merchandise Returns - Check PDF order return"
weight: 2
---

# FO - User account - Merchandise Returns - Check PDF order return
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-8335

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order (previously placed with the pre-condition) > Change "Awaiting XX payment" to "Delivered" status on the list | A successful message "Successful update." is displayed<br><br>The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header > Your account | "My account" page is well displayed |
| Click on "Order history and details" tab | The "Order history" page is displayed<br><br>All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links)<br><br>See the latest order made has the "Delivered" status and an invoice to download |
| Click on the "Details" link of the latest order made | The "Order details" page is well displayed |
| Go down to the list of product ordered > Check the product you want to return > Add a message on the "Merchandise return" section > Click on "Request a return" | The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account<br><br>All informations of the return are displayed (number of order / ID of Return / Package status / Date issued / Returns form) |
| Click on return "link" in "Return" column | The return details page is well displayed<br><br>All main informations are displayed:<br> * A information message "You must wait for confirmation before returning any merchandise." is displayed<br> * The reference and date of the return<br> * Content with the current status of the merchandise return is "Waiting for confirmation" |
| Go to BO > Customer Service > Merchandise Returns | The "Merchandise Returns" page is displayed<br><br>The merchandise return is displayed on the list with the status: *Waiting for confirmation* |
| Click on this merchandise return > Change the status "Waiting for confirmation" to "Waiting for package" > Save | A successful " Successful update" message is displayed<br><br>The "Merchandise Returns" page is displayed |
| Go back to FO > Refresh the "Returns details" page | In the content, the current status of the merchandise return is "*Waiting for package*"<br><br>A new block "Reminder" has appeared with content and links about the "returns form" and "contact page" |
| Click on one of the "returns form" link | The order return .pdf file is downloaded on your computer |
| Click on the file downloaded in your browser to open it on a new tab | The .pdf document is opened<br><br>The info in the file match the info in the BO :<br>Return Number, Date, Items to be returned, Reference and Qty |
