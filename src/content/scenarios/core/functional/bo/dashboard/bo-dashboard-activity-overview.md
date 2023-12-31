---
title: "BO - Dashboard - Activity overview"
weight: 2
---

# BO - Dashboard - Activity overview
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-720
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/01_dashboard/02_activityOverview.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Dashboard> Activity overview and click on _Online Visitors_ | The page Sell>Stats is displayed |
| Go to FO and login then logout by default customer | Customer is logout |
| go back to dashbord | number of online visitors =+1 |
| click on Active Shopping Carts | The page SELL>"Orders">"Shopping Carts" is displayed. |
| Create an order from FO | Order is created successfully |
| Go back to Active Shopping Carts | The total Active Shopping Carts activity overview +1 |
| Go back to Dashboard> Activity overview> Currently Pending | On Currently Pending you will see :<br>|Orders|Return/Exchanges|Abandoned Carts|Out of Stock Products| |
| Click on Orders in Currently Pending | The orders is displayed. |
| change the status of the first order to Processing in progress | The status is changed successfully |
| Go back to dashboard | Orders number +=1 |
| Go back to Dashboard> Activity overview> Currently Pending<br><br>Click on Return/Exchanges | The Customer Service> Merchandise Returns page is displayed. |
| Create a marchandise return | Merchandise return is created |
| Go back to Dashboard> Activity overview> Currently Pending | Toatle Return/Exchanges +1<br><br>issue here => [https://github.com/PrestaShop/PrestaShop/issues/34321] |
| Click on Abandoned Carts in Currently Pending | The Orders> Shopping Carts page is displayed. |
| Click on Out of stock products in Currently Pending | The Catalog> Monitoring page is displayed. |
| Create an out of stock product | Product is created successfully |
| Go back to dashboard | Out of stock products +=1 |
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
| Click on visits link | Stats page is displayed |
| Go back to dashboard and click on Unique visitors link | stats page is displayed |
| Check traffic source | contains 'prestashop.com' and 'Direct link' |
| Click on configure link | Configure form is displayed |
| Update all the values in the form and save | Success message is displayed<br><br>issue here https://github.com/PrestaShop/PrestaShop/issues/34326 |