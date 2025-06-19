---
title: "BO - Order creation - Search for customers"
weight: 3
---

# BO - Order creation - Search for customers
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-751
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/01_searchViewCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Customers page and click "Add new customer" | "Creating a new Customer" page is displayed |
| Set these fields:<br><br># Social title<br># First name<br># Last name<br># Email<br># Password<br><br>Set "Enabled" to "NO" an click on Save | A green alert "Successful creation." is displayed and the Customer list page is displayed |
| Click "Add new customer" | "Creating a new Customer" page is displayed |
| Set these fields:<br> # Social title<br> # First name<br> # Last name<br> # Email<br> # Password<br><br>Set "Enabled" to "YES" an click on Save | A green alert "Successful creation." is displayed and the Customer list page is displayed |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search disabled customer | No customers found |
| Search customer 'DOE' | Both John Doe and Jane Doe are displayed in the result block under the search bar. |
| Choose customer 'John DOE' | The customer-checkout-history block, the cart block, and the address block are displayed |
