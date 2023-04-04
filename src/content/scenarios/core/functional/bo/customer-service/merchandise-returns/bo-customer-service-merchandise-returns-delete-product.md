---
title: "BO - Customer Service - Merchandise returns - Delete product"
weight: 2
---

# BO - Customer Service - Merchandise returns - Delete product
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| {color:#C1C7D0} This step was calling test issue TEST-871 (possibly downgraded){color} |  |
| Click to save | "The settings have been successfully updated." notification |
| Go to BO > SELL > Orders > Ordres > View the created order with two products | The order page details is well displayed |
| Update the order status to Shipped OR Delivered and click on "Update Status" button | The "Successful update" message is well displayed |
| Go to FO > Connect with the customer of the Order > Click on Orders history page | All existing orders are well displayed in the list |
| Click on the order with the Delivered OR Shipped status > Details | The order details page is well displayed with all provided information of the Order<br><br>A checkboxes to select the product A and product B are displayed in the table and a new section related to MERCHANDISE RETURN is also displayed<br>h3. |
| Click on the checkboxes to select the product A and product B, select the quantity to return and add a message in the MERCHANDISE RETURN BLOCK<br>Then, click on the "REQUEST A RETURN" button | The page is refreshed and the Merchandise returns page is well displayed with all returned products<br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: The default first status is "Waiting for confirmation"<br> * Date issued: The date of the returned merchandise<br> * Returns form: The default value is "-" |
| Come back to BO > SELL > Customer Service > Merchandise returns | The returned merchandise is well displayed in the list with "Waiting for confirmation" status<br><br>The number of Merchandise returns done is also displayed |
| Click on the desired merchandise retrun | The  Return Merchandise Authorization (RMA) page is well displayed with all related information : <br> * Customer: The customer name is displayed <br> * Order: The order ID with the updated date is displayed<br> * Customer explanation: The message which is putted in the Merchandise Return block in FO<br> * Status: The default status is "Waiting for confirmation"<br> * Products: The information related to the returned products A and B are displayed with a "Delete" button action for each product<br> * Returns form : "- -" as a value |
| Click on Delete of the product line | The INVALID SECURITY TOKEN alert is displayed with bot o=information : <br><br>-Take me out of here!<br><br>-I understand the risks and I really want to display this page |
| *Case 1* : Click on take me out of here | The page is redirected to the dashboard page |
| *Case 2* : Click on I understand the risks and I really want to display this page | The  "Successful update" message is displayed<br><br>The Merchandise returns page is displayed |
| Click again the edit the same merchandise return | The edit  Return Merchandise Authorization (RMA) is displayed<br><br>Only one product is displayed |
| Click on Delete of the product line | An error message is displayed "You need at least one product."<br><br>The principal page of Merchandise returns is displayed again |
| Click on the cross to delete the alert | The alert is disappearing |
