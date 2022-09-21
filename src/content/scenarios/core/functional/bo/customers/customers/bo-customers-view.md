---
title: "BO - Customers - View"
weight: 8
---

# BO - Customers - View
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers page | The Customers page is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Fill all information : Social title : Mrs / Mrs. First name : Random. Last name : Random. Email : firstName.lastName@prestashop.com. Birthday Year : Random integer between 1950 and 2000. Birthday Month : Random integer between 1 and 12. Birthday Day : Random integer between 1 and 28<br>Customer Enabled : Yes. Partner offers : Random. Group Access : All. Default customer group : Customer. And Save Form | Customer is saved correctly<br>Message is displayed : Successful creation." |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly. Page Title contains Information about customer". All information are correct. Customer has 0 orders. Customer has 0 Carts. Customer has 0 Messages. Customer has 0 vouchers. Customer has 3 groups" |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Add the product to the cart | There is one product in the cart |
| Click on Proceed to checkout" button" | The purchase form is displayed correctly |
| Sign in with the created account. Criteria : firstName.lastName@prestashop.com" | The customer is logged successfully |
| Add new address with fake values: Company : Random. Address : Random. Zip : Random. City : Paris. Country : France. Phone : Random |  |
| Go to delivery step and add a comment | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Close FO page and go Back to BO | BO is displayed |
| Go to the Customers > Customers" page" | The Customers page is displayed correctly |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly. Page Title contains Information about customer". All information are correct.. Customer has 1 orders. Customer has 1 Carts. Customer has 1 Viewed product. Customer has 1 Messages. Customer has 0 vouchers. Customer has 2 Last emails. Customer has 1 Last connections. Customer has 3 groups" |
| Check orders | The order information is displayed correctly. Date is dare today. Payment mod is Bank transfer. Order status is Awaiting bank wire payment. Price is €0.00 |
| Check carts | The cart information is displayed correctly. Date is date today. Final price is 22.94 |
| Check address | The address information is displayed correctly. Company is correct. First name and last name are correct. address is correct. country is correct. phone is correct |
| Check messages | The message information is displayed correctly. Date is date today. Status is open. The message is correct |
| Check last connection | The last connection information is displayed correctly. Date is date today. The connection is direct link |
| Check groups | The groups information is displayed correctly. Group displayed is the customer default group |
| Add private note | Private note is saved correctly. Message is displayed : Successful update." |
| Click on edit customer information | Form Edit Customer is displayed correctly. Page Title contains Editing customer" |
| Edit customer with other fake values : Social title : Mrs / Mrs. First name : Random. Last name : Random. Email : firstName.lastName@prestashop.com. Birthday Year : Random integer between 1950 and 2000. Birthday Month : Random integer between 1 and 12. Birthday Day : Random integer between 1 and 28. Customer Enabled : No. Partner offers : Random. Group Access : All. Default customer group : Visitor. And Save Form | Customer is saved correctly. Message is displayed : Successful update." |
| View Customer | The Customer information page is displayed correctly. Page Title contains Information about customer". All information are correct. Customer group is visitor" |
| Click on view order | Form View order is displayed correctly. Page Title contains Order" |
| Edit order status to shipped and save | Order status is saved correctly. Message is displayed : Successful update." |
| Go to the Customers > Customers" page" | The Customers page is displayed correctly |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly |
| Check order status | The status is changed successfully. The final price is displayed successfully |
| Check purchased product number and purchased product | The purchased product is correct. The product purchased number is 1 |
| Click on edit address button | Form edit address is displayed correctly. Page Title contains Edit" |
| Edit address with fake values : Company : Random. First name : Random. Last name : Random. Email : firstName.lastName@prestashop.com. Address : Random. City : Paris. Country : France. Phone : Random. And Save Form | Address is saved correctly. Message is displayed : Successful update." |
| View Customer | The edited address is displayed correctly |
| Click on view cart button | Form view cart is displayed correctly. Page Title contains Cart" |
| Go to the Customers > Customers" page" | The Customers page is displayed correctly |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| Delete customer | Customer is deleted successfully |
