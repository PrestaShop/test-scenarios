---
title: "FO - User account - Merchandise Returns - Check PDF order return"
weight: 4
---

# FO - User account - Merchandise Returns - Check PDF order return
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1219
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/merchandiseReturns/02_checkOrderReturnPDF.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order (previously placed with the pre-condition) > Change "Awaiting XX payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | "Your account" page is well displayed |
| Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links)<br> * At least one order should have "Delivered" status and an invoice to download<br> * For the status "Awaiting XX payment" for example, there is no invoice icon on the column |
| Choose the order with the "Delivered" status and click on the "Details" link in the last column | * The "Order details" page is well displayed<br> * All the informations about the order are displayed |
| Go down to the list of product ordered > Check the product you want to return and the quantity (if it's more than 1) > Add a message on the "Merchandise return" section > Click on "Request a return" | * The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account<br> * All informations of the return are displayed (number of order / ID of Return / Package status / Date issued / Returns form) |
| Click on return "link" in "Return" column | * The return details page is well displayed<br> * All main informations are displayed:<br> ** A information message "You must wait for confirmation before returning any merchandise." is displayed<br> **  reference and date of the return<br> ** Content with the current status of the merchandise return is "Waiting for confirmation"<br> ** List of items ti be return with the name / combinations / reference and quantity |
| Go to BO > Customer Service > Merchandise Returns | * The "Merchandise Returns" page is displayed<br> * The merchandise return is displayed on the list with the status: *Waiting for confirmation* |
| Click on this merchandise return > Change the status "Waiting for confirmation" to "Waiting for package" on the list field > Click on "Save" button | * A successful " Successful update" message is displayed<br> * The "Merchandise Returns" page is displayed |
| Go back to FO > Refresh the "Merchandise returns details" page | * No information message is displayed<br> * In the content, the current status of the merchandise return is "*Waiting for package*"<br> * A new block "Reminder" is appeared with content and links about the "returns form" and "contact page" |
| Click on one of the "returns form" link | The order return .pdf file is downloaded on your computer |
| Click on the file downloaded in your browser to open it on a new tab | * A new tab with the .pdf document is opened<br> * All main informations of the return is displayed |