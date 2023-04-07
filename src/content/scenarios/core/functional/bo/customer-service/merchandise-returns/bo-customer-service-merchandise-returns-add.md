---
title: "BO - Customer Service - Merchandise returns - Add"
weight: 3
---

# BO - Customer Service - Merchandise returns - Add
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > SELL > Customer Service > Merchandise Returns | Merchandise Returns page is well displayed |
| Go to BO > Customer Service > Merchandise Returns | Merchandise Returns page is displayed<br><br>See Enable returns button is set to NO |
| Click on Enable returns switch button | Message "The settings have been successfully updated." is displayed<br><br>Enable returns button is set to YES |
| Go to BO > SELL > Orders > View the created order | The created order page details is well created |
| Update the order status to Shipped OR Delivered and click on "Update Status" button | The "Successful update" message is well displayed |
| Go to FO > Connect with the customer of the Order > Click on Orders history page | All existing orders are well displayed in the list |
| Click on the order with the Delivered OR Shipped status > Details | The order details page is well displayed with all provided information of The Order<br><br>A checkbox to select the product is displayed in the table and A new section related to MERCHANDISE RETURN is also displayed<br>h3. |
| *Case 1* : Return a product X without adding a message<br><br>Click on the checkbox to select the desired product and select the quantity to return <br><br>Then, click on the "REQUEST A RETURN" button | An error message is displayed "Please provide an explanation for your RMA." |
| *Case 2* : Return a product X with a message<br><br>Click on the checkbox to select the desired product, select the quantity to return and add a message in the MERCHANDISE RETURN BLOCK<br>Then, click on the "REQUEST A RETURN" button | The page is refreshed and the Merchandise returns page is well displayed with all returned products<br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: The default first status is "Waiting for confirmation"<br> * Date issued: The date of the returned merchandise<br> * Returns form: The default value is "-" |
| Come back to BO > SELL > Customer Service > Merchandise returns | The returned merchandise is well displayed in the list with "Waiting for confirmation" status<br><br>The number of Merchandise returns done is also displayed |
| Click on the desired merchandise retrun | The  Return Merchandise Authorization (RMA) page is well displayed with all related information : <br> * Customer: The customer name is displayed <br> * Order: The order ID with the updated date is displayed<br> * Customer explanation: The message which is putted in the Merchandise Return block in FO<br> * Status: The default status is "Waiting for confirmation"<br> * Products: The informations related to the returned product are displayed with a "Delete" button action <br> * Returns form : "- -" as a value |
| Click on Cancel | Merchandise return page is displayed |
