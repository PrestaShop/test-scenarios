---
title: View customer
weight: 8
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Customers > Customers" page | The Customers page is displayed correctly |
| Reset all filters | All filters are reset<br>All products are displayed |
| Fill all information :<br><br>Social title : Mrs / Mrs<br>First name : Random<br>Last name : Random<br>Email : firstName.lastName@prestashop.com<br>Birthday Year : Random integer between 1950 and 2000<br>Birthday Month : Random integer between 1 and 12<br>Birthday Day : Random integer between 1 and 28<br>Customer Enabled : Yes<br>Partner offers : Random<br>Group Access : All<br>Default customer group : Customer<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : "Successful creation." |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly<br>Page Title contains "Information about customer"<br>All information are correct<br>Customer has 0 orders<br>Customer has 0 Carts<br>Customer has 0 Messages<br>Customer has 0 vouchers<br>Customer has 3 groups |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Add the product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the created account <br>Criteria : "firstName.lastName@prestashop.com" | The customer is logged successfully |
| Add new address with fake values:<br><br>Company : Random<br>Address : Random<br>Zip : Random<br>City : Paris<br>Country : France<br>Phone : Random |  |
| Go to delivery step and add a comment | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Close FO page and go Back to BO | BO is displayed |
| Go to the "Customers > Customers" page | The Customers page is displayed correctly |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly<br>Page Title contains "Information about customer"<br>All information are correct<br>Customer has 1 orders<br>Customer has 1 Carts<br>Customer has 1 Viewed product<br>Customer has 1 Messages<br>Customer has 0 vouchers<br>Customer has 2 Last emails<br>Customer has 1 Last connections<br>Customer has 3 groups |
| Check orders | The order information is displayed correctly<br>Date is dare today<br>Payment mod is Bank transfer<br>Order status is Awaiting bank wire payment<br>Price is €0.00 |
| Check carts | The cart information is displayed correctly<br>Date is date today<br>Final price is 22.94 |
| Check address | The address information is displayed correctly<br>Company is correct<br>Fisr name and last name are correct<br>address is correct<br>country is correct<br>phone is correct |
| Check messages | The message information is displayed correctly<br>Date is date today<br>Status is open<br>The message is correct |
| Check last connection | The last connection information is displayed correctly<br>Date is date today<br>The connection is direct link |
| Check groups | The groups information is displayed correctly<br>Group displayed is the customer default group |
| Add private note | Private note is saved correctly<br>Message is displayed : "Successful update." |
| Click on edit customer information | Form Edit Customer is displayed correctly<br>Page Title contains "Editing customer" |
| Edit customer with other fake values :<br><br>Social title : Mrs / Mrs<br>First name : Random<br>Last name : Random<br>Email : firstName.lastName@prestashop.com<br>Birthday Year : Random integer between 1950 and 2000<br>Birthday Month : Random integer between 1 and 12<br>Birthday Day : Random integer between 1 and 28<br>Customer Enabled : No<br>Partner offers : Random<br>Group Access : All<br>Default customer group : Visitor<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : "Successful update." |
| View Customer | The Customer information page is displayed correctly<br>Page Title contains "Information about customer"<br>All information are correct<br>Customer group is visitor |
| Click on view order | Form View order is displayed correctly<br>Page Title contains "Order" |
| Edit order status to shipped and save | Order status is saved correctly<br>Message is displayed : "Successful update." |
| Go to the "Customers > Customers" page | The Customers page is displayed correctly |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly |
| Check order status | The status is changed successfully<br>The final price is displayed successfully |
| Check purchased product number and purchased product | The purchased product is correct<br>The product purchased number is 1 |
| Click on edit address button | Form edit address is displayed correctly<br>Page Title contains "Edit" |
| Edit address with fake values :<br><br>Company : Random<br>First name : Random<br>Last name : Random<br>Email : firstName.lastName@prestashop.com<br>Address : Random<br>City : Paris<br>Country : France<br>Phone : Random<br><br>And Save Form | Address is saved correctly<br>Message is displayed : "Successful update." |
| View Customer | The edited address is displayed correctly |
| Click on view cart button | Form view cart is displayed correctly<br>Page Title contains "Cart" |
| Go to the "Customers > Customers" page | The Customers page is displayed correctly |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| Delete customer | Customer is deleted successfully |
