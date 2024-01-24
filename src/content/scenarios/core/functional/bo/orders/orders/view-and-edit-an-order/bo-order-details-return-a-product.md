---
title: "BO - Order details - Return a product"
weight: 13
---

# BO - Order details - Return a product
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7395
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/13_returnOrder.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | The Orders page is well displayed<br><br>The orders are displayed in a table with title : Orders +(total number of orders) |
| Change the status of the first order (ref KHWLILZLL) | Successful update message is displayed.<br><br>Status is updated to delivered. |
| Click on *View* icon button | Order details page is displayed<br><br>All the details of selected order are displayed |
| Click on *Partial Refund* button | The Product section is displayed all over page width with new fields added to the table : Partial Refund<br><br><br>Three checkboxes are displayed with two selected by default |
| Type the quantity to return : 0 > Click on *Partial Refund* button | Alert displayed : "Please select at least one product." |
| Click on *Partial Refund* button > Add a quantity > Check Generate a voucher checkbox > Click on Partial Refund button | Message displayed : "A partial refund was successfully created."<br><br>The button Partial refund is now disabled<br><br>New field is displayed is Products table : Refunded |
| Check your emails | Emails "New credit slip regarding your order" &  "New voucher for your order #KHWLILZLL" are sent to the customer pub@prestashop.com |
