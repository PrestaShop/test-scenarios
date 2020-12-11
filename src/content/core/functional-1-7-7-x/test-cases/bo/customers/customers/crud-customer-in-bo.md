---
title: CRUD Customer In BO
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Customers > Customers" page | The Customers page is displayed correctly |
| Reset all filters | All filters are reset<br>All products are displayed |
| Click on "Add new customer" | New Customer Page is displayed correctly<br>Page title contains "Creating a new Customer" |
| Fill all information : <br>> Social title :  Mrs / Mrs<br>> First name : Random<br>> Last name : Random<br>> Email : firstName.lastName@prestashop.com<br>> Birthday Year : Random integer between 1950 and 2000<br>> Birthday Month : Random integer between 1 and 12<br>> Birthday Day : Random integer between 1 and 28<br>> Customer Enabled : Yes<br>> Partner offers : Random<br>> Group Access : All<br>> Default customer group : Visitor<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : "Successful creation." |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Go to login Page | Login page is displayed |
| Login with customer created | Customer is logged in |
| log out from FO | Customer is logged out |
| Close FO page and go Back to BO | BO is displayed |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly<br>Page Title contains "Information about customer"<br>All information are correct<br>Customer has 0 orders <br>Customer has 0 Carts |
| Go back to customers Page and click on Edit | For Edit Customer is displayed correctly<br>Page Title contains "Editing customer" |
| Edit customer with other fake values : <br>> Social title :  Mrs / Mrs<br>> First name : Random<br>> Last name : Random<br>> Email : firstName.lastName@prestashop.com<br>> Birthday Year : Random integer between 1950 and 2000<br>> Birthday Month : Random integer between 1 and 12<br>> Birthday Day : Random integer between 1 and 28<br>> Customer Enabled : No<br>> Partner offers : Random<br>> Group Access : All<br>> Default customer group : Visitor<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : "Successful update." |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Go to login Page | Login page is displayed |
| Login with customer edited | Error Message is displayed , can't connect with disabled account |
| Close FO page and go Back to BO | BO is displayed |
| View Customer | The Customer information page is displayed correctly<br>Page Title contains "Information about customer"<br>All information are correct<br>Customer has 0 orders <br>Customer has 0 Carts |
| Go back to customers Page | Customers page is displayed |
| In list, Filter By Email<br>Criteria : "firstName.lastName@prestashop.com" | Filter is succeeded |
| Delete Customer with option <br>"I want my customers to be able to register again with the same email address. All data will be removed from the database." | Customer is deleted <br>Message is displayed : "Successful deletion." |
| Reset all filters | All filters are reset<br>All products are displayed |
