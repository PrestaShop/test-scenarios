---
title: "BO - Customers - CRUD - Guest"
weight: 11
---

# BO - Customers - CRUD - Guest
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-12645

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers page | The Customers page is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Click on Add new customer | New Customer Page is displayed correctly. Page title contains Creating a new Customer |
| Fill all information with Data below > Save Form | Customer is saved correctly. Message is displayed : Successful creation. |
| In Customers list, Filter By Email. Criteria : test.guest@prestashop.com | List is filtered correctly<br><br>Group : Guest |
| View Customer | The Customer information page is displayed correctly.<br>Page Title contains Information about customer<br>Information is correct.<br>Customer has 0 Orders.<br>Customer has 0 Carts. |
| Go back to customers Page and click on Edit | Edit Customer page is displayed correctly. Page Title contains Editing customer<br><br>Link to transform a this guest to a registered customer should not be available |
| Edit customer with other fake values (use Data colomn) > Save Form | Customer is saved correctly. Message is displayed : Successful update. |
| Delete Customer with option: "I want my customers to be able to register again with the same email address. All data will be removed from the database." | Customer is deleted.<br>Message is displayed : Successful deletion. |
| Reset all filters | All filters are reset. All Customers are displayed |
