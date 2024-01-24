---
title: "BO - Order creation - Create customer"
weight: 2
---

# BO - Order creation - Create customer
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-750
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/02_createCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on "Add new Order" | Create order page is displayed |
| Click on "Add new customer" | A modal for adding new customer is displayed |
| Set these fields:<br><br># Social title<br># First name<br># Last name<br># Email<br># Password<br><br>and click on "Save" | The customer search display the new customer as a result |
| Go to BO > Customers page and search by email | The Customer list page is displayed and the new customer is displayed |
| Click to Delete the customer and confirm the deletion | A green alert "Successful deletion." is displayed and the new customer is well removed |
| Click on "Reset" | The filter is cleared |
