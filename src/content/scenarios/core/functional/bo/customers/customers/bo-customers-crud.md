---
title: "BO - Customers - CRUD"
weight: 2
---

# BO - Customers - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-849
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/01_customers/02_CRUDCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customers/customers/creating-a-new-customer

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers page | The Customers page is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Click on Add new customer | New Customer Page is displayed correctly. Page title contains Creating a new Customer |
| Fill all information with Data below > Save Form | Customer is saved correctly. Message is displayed : Successful creation. |
| Go to FO by clicking on View My shop | FO page Opens on Homepage |
| Go to login Page | Login page is displayed |
| Log in with customer created | Customer is logged in |
| Log out from FO | Customer is logged out |
| Close FO page and go Back to BO | BO is displayed |
| In Customers list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | List is filtered correctly |
| View Customer | The Customer information page is displayed correctly.<br>Page Title contains Information about customer<br>Information is correct.<br>Customer has 0 Orders.<br>Customer has 0 Carts. |
| Go back to customers Page and click on Edit | Edit Customer page is displayed correctly. Page Title contains Editing customer |
| Edit customer with other fake values (use Data colomn) > Save Form | Customer is saved correctly. Message is displayed : Successful update. |
| Go to FO by clicking on View My shop | FO page Opens on Homepage |
| Go to login Page | Login page is displayed |
| Log in with customer edited | Error Message is displayed: "Your account isn't available at this time, please contact us" |
| Close FO page and go Back to BO | BO is displayed |
| View Customer | The Customer information page is displayed correctly.<br>Page Title contains Information about customer.<br>All information are correct.<br>Customer has 0 Orders.<br>Customer has 0 Carts. |
| Go back to customers Page | Customers page is displayed |
| In list, Filter By Email. Criteria : firstName.lastName@prestashop.com" | List is filtered correctly |
| Delete Customer with option: "I want my customers to be able to register again with the same email address. All data will be removed from the database." | Customer is deleted.<br>Message is displayed : Successful deletion. |
| Reset all filters | All filters are reset. All Customers are displayed |
