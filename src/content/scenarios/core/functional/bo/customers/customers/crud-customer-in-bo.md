---
title: "CRUD Customer In BO"
weight: 2
---

# CRUD Customer In BO
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers" page" | The Customers page is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Click on Add new customer" | New Customer Page is displayed correctly. Page title contains Creating a new Customer" |
| Fill all information : Social title :  Mrs / Mrs. First name : Random. Last name : Random. Email : firstName.lastName@prestashop.com. Birthday Year : Random integer between 1950 and 2000. Birthday Month : Random integer between 1 and 12.  Birthday Day : Random integer between 1 and 28. Customer Enabled : Yes. Partner offers : Random. Group Access : All. Default customer group : Visitor. And Save Form | Customer is saved correctly. Message is displayed : Successful creation." |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Go to login Page | Login page is displayed |
| Login with customer created | Customer is logged in |
| log out from FO | Customer is logged out |
| Close FO page and go Back to BO | BO is displayed |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| View Customer | The Customer information page is displayed correctly. Page Title contains Information about customer". All information are correct. Customer has 0 orders. Customer has 0 Carts" |
| Go back to customers Page and click on Edit | For Edit Customer is displayed correctly. Page Title contains Editing customer" |
| Edit customer with other fake values : Social title :  Mrs / Mrs. First name : Random. Last name : Random. Email : firstName.lastName@prestashop.com. Birthday Year : Random integer between 1950 and 2000. Birthday Month : Random integer between 1 and 12. Birthday Day : Random integer between 1 and 28. Customer Enabled : No. Partner offers : Random. Group Access : All. Default customer group : Visitor. And Save Form | Customer is saved correctly. Message is displayed : Successful update." |
| Go to Fo by clicking on View My shop | Fo page Open on home Page |
| Go to login Page | Login page is displayed |
| Login with customer edited | Error Message is displayed , can't connect with disabled account |
| Close FO page and go Back to BO | BO is displayed |
| View Customer | The Customer information page is displayed correctly. Page Title contains Information about customer". All information are correct. Customer has 0 orders. Customer has 0 Carts" |
| Go back to customers Page | Customers page is displayed |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | Filter is succeeded |
| Delete Customer with option. I want my customers to be able to register again with the same email address. All data will be removed from the database." | Customer is deleted. Message is displayed : Successful deletion." |
| Reset all filters | All filters are reset. All products are displayed |
