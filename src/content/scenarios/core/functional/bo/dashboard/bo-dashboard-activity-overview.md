---
title: "BO - Dashboard - Activity overview"
weight: 3
---

# BO - Dashboard - Activity overview
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-720

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Dashboard> Activity overview and click on _Online Visitors_ | The page Sell>Stats is displayed |
| Go back to Dashboard> Activity overview and click on Active Shopping Carts | The page Orders Shopping> Carts is displayed. |
| Go to BO > Orders > Orders > Click Add new order > Choose existing customer | Check that Summary block is not visible |
| Add product to cart | Check that summary block is visible<br><br>Check Summary > *Total Product* & *Total (Tax excl.)* should be equal<br><br>*Total (Tax incl.)* should be equal to ** *Total taxes* + *Total (Tax excl.)* |
| Add a voucher | See in Summary that *Total vouchers (Tax excl.)* has been updated |
| Delete voucher | *Total vouchers (Tax excl.)* equal to 0<br><br>*Total (Tax incl.)* should be updated |
| Change Delivery Option with a not free carrier | *Total shipping (Tax excl.)* will be updated<br><br>Price should be tax excluded<br><br>*Total (Tax incl.)* should be updated |
| Case1<br><br>The payment is not selected (Choose by default), click on Create Order | The order is not created, the payment is required |
| Case2<br><br>The Order status is not selected (Choose by default), click on Create Order | The order is not created, the order status is required |
| Fill in "Order message" > Add a payment > Choose an order status > Click "more actions" > Choose "Send pre-filled order to the customer by email" | * Message "The email was sent to your customer." appears<br> * An email should be received<br> ** the subject contains "Process the payment of your order"<br> ** the body contains "A new order has been generated on your behalf." |
| Fill in "Order message" > Add a payment > Choose an order status > Click "more actions" > Choose "Proceed to checkout in the front office" | FO opens with Step 2 of checkout process |
| Come back to BO > Fill in "Order message" > Add a payment > Choose an order status > Click button Create Order | Order will be created - Order details will be opened in BO<br><br>In the Messages block > Check the Order message is well displayed |
| Go back to Active Shopping Carts | The total Active Shopping Carts activity overview +1 |
| Go back to Dashboard> Activity overview> Currently Pending | On Currently Pending you will see :<br>|Orders|Return/Exchanges|Abandoned Carts|Out of Stock Products| |
| Click on Orders in Currently Pending | The orders is displayed. |
| Click on Return/Exchanges in Currently Pending | The Customer Service> Merchandise Returns page is displayed. |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| Enable the returns of product and click on Save | The toggle is well enabled and a message "The settings have been successfully updated." is displayed |
| Click on the Time limit of validity and change the number of days as desired and click on Save | The new number is well-updated and a message "The settings have been successfully updated." is displayed |
| Click on the Returns prefix and change the prefix used for the downloadable pdf file | The new value is well-updated and a message "The settings have been successfully updated." is well displayed |
| Go to orders> orders<br><br>Choose a product and click on _view_  button | The product details page is displayed |
| Click on product status and change it to delivered<br><br>click on update status | _Successful update_ message is well displayed.<br><br>_Returned products_ button is enabled |
| Click on _Returned products_ button | The product details are displayed |
| Check the quantity and click on _Returned products_ button | The product details page is displayed<br><br>*_The product was successfully returned_* message is displayed |
| Go back to Dashboard> Activity overview> Currently Pending | Toatle Return/Exchanges +1 |
| Click on Abandoned Carts in Currently Pending | The Orders> Shopping Carts page is displayed. |
| Click on Out of stock products in Currently Pending | The Catalog> Monitoring page is displayed. |
| Go back to Dashboard> Activity overview> Notifications | On Currently Pending you will see :<br>|New Messages|Product Reviews| |
| Go to the shop FO | The FO homepage shop is displayed |
| Login to a existing customer account | Logged in as customer |
| Add a product to cart | The confirmation modal is displayed |
| In the "add to cart" confirmation modal click on the "order" button | Redirected to the cart page |
| In the cart page click on the order button | the checkout process is started and the "address selection" step is displayed |
| Click on the "next" button | The delivery mode selection is displayed |
| Click on "next" button | The payment method is now displayed |
| Select a paiement method, check the "generals conditions" checkbox and click on the "order" button | The order is now completed and the "order confirmation" page is displayed |
| In the "order confirmation" page click on the "client support" link | Redirection to the "contact us" page |
| In the "contact us" page, check if the email is correctly pre-filled | The email field is filled with the logged in customer email address |
| Select a order reference | The order reference is selected |
| Add a message in the textarea field | The textarea field is filled with the message |
| Add a attachment file | The attachment file is correctly added |
| click on the "send message" button | A success message is displayed |
| Go to the BO | The BO login page is displayed |
| Login to the BO | Redirected to the BO dashboard page as logged in user |
| Go to the customer service page | The customer service page is displayed |
| in the customer service page check in the customer service table if the previously send message is correctly displayed | The previously send message is displayed and all the informations are correct |
| Go back to Dashboard> Activity overview> Notifications | Total New messages +1 |
| Go back to Dashboard> Activity overview> Customers & Newsletters | On Customers & Newsletters you will see :<br>|New Customers|New Subscriptions|Total Subscribers| |
| Click on _New Customers_ | Customers page is displayed |
| Enable the Newsletter option of the new customer already added | _The status has been successfully updated_ message is displayed |
| Click on _Add new customer_ and fill the new customer form,<br><br>save | _Successful creation_ message is displayed |
| Go back to Dashboard> Activity overview> Customers & Newsletters | Total Subscribers +1 |
| Click on configure button | The Activity overview configuration is displayed with : <br><br> <br>|Active cart|30|<br>|Online visitor|30|<br>|Abandoned cart (min)|24 hrs|<br>|Abandoned cart (max)|48 hrs| |
| Change configuration, save. |  |
