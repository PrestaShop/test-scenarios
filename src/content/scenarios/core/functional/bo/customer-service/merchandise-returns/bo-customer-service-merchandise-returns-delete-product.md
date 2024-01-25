---
title: "BO - Customer Service - Merchandise returns - Delete product"
weight: 1
---

# BO - Customer Service - Merchandise returns - Delete product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-872
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/03_merchandiseReturns/02_deleteProduct.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customer-service/merchandise-returns

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| Enable merchandise returns |  |
| Click to save | "The settings have been successfully updated." notification |
| Go to BO > SELL > Orders > Ordres > View the created order with three products | The order page details is well displayed |
| |Click on the checkboxes to select the product A and product B, and C select the quantity to return and add a message in the MERCHANDISE RETURN BLOCK<br>Then, click on the "REQUEST A RETURN" button| | The page is refreshed and the Merchandise returns page is well displayed with all returned products |
| Update the order status to Shipped OR Delivered and click on "Update Status" button | The "Successful update" message is well displayed |
| Come back to BO > SELL > Customer Service > Merchandise returns | The returned merchandise is well displayed in the list with "Waiting for confirmation" status<br><br>The number of Merchandise returns done is also displayed |
| Click on the desired merchandise retrun | The  Return Merchandise Authorization (RMA) page is well displayed with all related information : <br> * Customer: The customer name is displayed <br> * Order: The order ID with the updated date is displayed<br> * Customer explanation: The message which is putted in the Merchandise Return block in FO<br> * Status: The default status is "Waiting for confirmation"<br> * Products: The information related to the returned products A and B are displayed with a "Delete" button action for each product<br> * Returns form : "- -" as a value |
| Click on Delete of the product line | The INVALID SECURITY TOKEN alert is displayed with bot o=information : <br><br>-Take me out of here!<br><br>-I understand the risks and I really want to display this page |
| *Case 1* : Click on take me out of here | The page is redirected to the dashboard page |
| Go back to merchandise returns > Edit page | The first product is deleted successfully |
| *Case 2* : Click on I understand the risks and I really want to display this page | The  "Successful update" message is displayed<br><br>The Merchandise returns page is displayed |
| Click again the edit the same merchandise return | The edit  Return Merchandise Authorization (RMA) is displayed<br><br>Only one product is displayed |
| Click on Delete of the product line | An error message is displayed "You need at least one product."<br><br>The principal page of Merchandise returns is displayed again |
| Click on the cross to delete the alert | The alert is disappearing |
| POST-condition<br><br>Disable merchandise returns |  |
