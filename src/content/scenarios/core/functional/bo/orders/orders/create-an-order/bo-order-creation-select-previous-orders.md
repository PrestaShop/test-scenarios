---
title: "BO - Order creation - Select previous Orders"
weight: 7
---

# BO - Order creation - Select previous Orders
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7524
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/05_selectPreviousOrders.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Add new order > Choose customer John Doe > Click Details on the cart > Click the cross to close the popup | Popup opens with Total Cart - Customer information - Order information - Cart Summary |
| In customer block > Click on Order tab > Click Details | See list of Orders previously made by customer<br><br>Popup opens with all order details |
| Click Use on the Order | Block Cart will be updated with product of Order |
| Finalize order | New order is created |
