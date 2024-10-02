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
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/dashboard/dashboard

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Dashboard > Activity overview and click on "Online Visitors" | The page Sell>Stats is displayed |
| Go to FO and login then logout by default customer | Customer is logout |
| go back to dashbord | number of online visitors =+1 |
| Click on Active Shopping Carts | The page SELL>"Orders">"Shopping Carts" is displayed. |
| Create an order from FO | Order is created successfully |
| Go back to Active Shopping Carts | The total Active Shopping Carts activity overview +1 |
| Go back to Dashboard> Activity overview> Currently Pending | On Currently Pending you will see :<br> * Orders|Return<br> * Exchanges<br> * Abandoned Carts<br> * Out of Stock Products |
| Click on Orders in Currently Pending | The orders is displayed. |
| change the status of the first order to Processing in progress | The status is changed successfully] |
| Go back to dashboard | Orders number +=1 |
| * Go back to Dashboard> Activity overview> Currently Pending<br> * Click on Return/Exchanges | The Customer Service> Merchandise Returns page is displayed. |
| Create a marchandise return | Merchandise return is created |
| Go back to Dashboard> Activity overview> Currently Pending | Toatle Return/Exchanges +1<br><br>issue here => [[https://github.com/PrestaShop/PrestaShop/issues/34321] |
| Click on Abandoned Carts in Currently Pending | The Orders> Shopping Carts page is displayed. |
| Click on Out of stock products in Currently Pending | The Catalog> Monitoring page is displayed. |
| Create an out of stock product | Product is created successfully |
| Go back to dashboard | Out of stock products +=1 |
| Go back to Dashboard> Activity overview> Notifications | On Currently Pending you will see :<br> * New Messages<br> * Product Reviews<br> * [Clé:TEST-7012] [Résumé:FO - Order confirmation - Contact us] |
| Go back to Dashboard> Activity overview> Notifications | Total New messages +1 |
| Go back to Dashboard> Activity overview> Customers & Newsletters | On Customers & Newsletters you will see :<br> * New Customers<br> * New Subscriptions<br> * Total Subscribers |
| Click on "New Customers" | Customers page is displayed |
| Enable the Newsletter option of the new customer already added | "The status has been successfully updated" message is displayed] |
| * Click on "Add new customer" and fill the new customer form<br> * Save | "Successful creation" message is displayed |
| Go back to Dashboard> Activity overview> Customers & Newsletters | Total Subscribers +1 |
| Click on visits link | Stats page is displayed |
| Check traffic source | contains 'prestashop.com' and 'Direct link' |
| Click on configure link | Configure form is displayed |
| Update all the values in the form and save | Success message is displayed |
