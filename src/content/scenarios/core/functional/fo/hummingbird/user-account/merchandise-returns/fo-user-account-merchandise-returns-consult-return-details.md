---
title: "FO - User account - Merchandise Returns : Consult return details"
weight: 1
---

# FO - User account - Merchandise Returns : Consult return details
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8334
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/03_merchandiseReturns/01_consultReturnDetails.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Create an order (with the precondition) > Change "Awaiting XX payment" to "Delivered" status | A successful message "Successful update." is displayed<br>The status label of the order is well changed to "Delivered" |
| Go to FO > Sign In to customer account > Click on you user account name in the header > Orders | "Order history" page is well displayed |
| Click on the "Details" link in the last column for the order | The "Order details" page is well displayed |
| Go to block Products > Check the product to return > Add a message on the "Merchandise return" section > Click on "Request a return" | The "Merchandise returns" page is displayed with the list of merchandise returns of the customer account |
| *Case 1: Waiting confirmation of the return*<br>Click on the Return link | Message "You must wait for confirmation before returning any merchandise." is displayed<br>See : the current status of the merchandise return is "Waiting for confirmation" |
| Go to BO > Customer Service > Merchandise Returns page > Edit the last return to "Waiting for package" > Save | An alert "Successful update." is well displayed |
| *Case 2: Waiting for package*<br><br>Go to FO > Click on your user account > Click on Merchandise returns" > Click on the Return link<br><br>All informations are displayed for the waiting package | See : the current status of the merchandise return is "Waiting for package"<br>A new block "Reminder" is displayed with links about the "returns form" and "contact page" |
| Go back to BO > Customer Service > Merchandise Returns page > Edit the last return to "Package received" status > Save | An alert "Successful update." is well displayed |
| *Case 3:* *Package received*<br><br>Go to FO > Click on your user account > Click on the Merchandise returns > Click on the Return link<br><br>All informations are displayed for the received package | See : the current status of the merchandise return is "Package received" |
| Go to BO > Customer Service > Merchandise Returns page > Edit the last return to "Return denied" status and save | An alert "Successful update." is well displayed |
| *Case 4:* *Return denied*<br><br>Go to FO > Click on your user account > Click on the Merchandise returns > Click on the Return link<br><br>All informations are displayed for the denied return | See : the current status of the merchandise return is "Return denied" |
| Go to BO > Customer Service > Merchandise Returns page > Edit the last return to "Return completed" status and save | An alert "Successful update." is well displayed |
| *Case 5:* *Return completed*<br><br>Go to FO > Click on your user account name in the header > Click on the Merchandise returns > Click on the Return link<br><br>All informations are displayed for the completed return | See : the current status of the merchandise return is "Return completed" |
