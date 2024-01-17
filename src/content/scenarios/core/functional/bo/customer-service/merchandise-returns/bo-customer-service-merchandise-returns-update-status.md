---
title: "BO - Customer Service - Merchandise returns - Update status"
weight: 2
---

# BO - Customer Service - Merchandise returns - Update status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5411
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/03_merchandiseReturns/03_updateStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed |
| choose product with quantity = 4 and add it to cart | The product table is displayed, the Shipping block is displayed and the summary block is displayed |
| Choose delivery method (free) | Delivery method is selected |
| Choose Payment method | Payment method is selected |
| Choose order status | Order status is selected |
| Click on "Create the order" | The order details page is displayed with exact data:<br><br># Order status<br># Order Price<br># Shipping Address<br># Invoice Address<br># Product name |
| On BO>Orders>Orders | Orders page displayed |
| Click on your last order created | Order page displayed |
| Change the status to Shipped and click to Update status | Successful notification<br><br>Partial refund button diplayed |
| Click on Partial refund > change Quantity 0 by 1 and click to Partial refund | "A partial refund was successfully created." notification |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| Click on the line of the returned product | Then desired Return Merchandise Authorization details are well displayed |
| Click on the dropdwon list of status and change the status to "Waiting for package" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Waiting for package"<br><br>Returns form: A pdf file named "Print out" is displayed |
| Click on the pdf | The pdf file is generated with this name "Returns Prefix 000001" <br><br>The default one is : RE000001 |
| Click on the generated pdf | All informations about the order return are well displayed |
| Come back to the edit Return Merchandise Authorization page <br><br>Click on Cancel | The status of the merchandise return is changed to "Waiting for package" with the purple color <br><br>The date issued is updated by the current date |
| Go to FO > Connect with the customer > Click on the Merchandise Returns page |  |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Package received" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Package received"<br><br>The returns form pdf is disappeared and the value is set to: "- -" |
| Check received emal | Email received to customer => <br><br>Your order return status has changed |
| Click on Cancel | The status of the merchandise return is changed to "Package received" with the green color <br><br>The date issued= the current date |
| Come back to FO >  Click on the Merchandise Returns page |  |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Return denied" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Return denied" |
| Check received emal | Email received to customer => <br><br>Your order return status has changed |
| Click on Cancel | The status of the merchandise return is changed to "Return denied" with the red color <br><br>The date issued= the current date |
| Come back to FO > Click on the Merchandise Returns page |  |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Return completed" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Return completed" |
| Check received emal | Email received to customer => <br><br>Your order return status has changed |
| Click on Cancel | The status of the merchandise return is changed to "Return completed" with the dark green color <br><br>The date issued= the current date |
| Come back to FO > Click on the Merchandise Returns page |  |
