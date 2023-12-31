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

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | The Orders page is well displayed<br><br>The orders are displayed in a table with title : Orders +(total number of orders) |
| Change the status of the first order (ref KHWLILZLL) | Successful update message is displayed.<br><br>Status is updated to delivered. |
| Click on *View* icon button | Order details page is displayed<br><br>All the details of selected order are displayed |
| Click on *Return products* button | The Product section is displayed all over page width with new fields added to the table : Return products<br><br><br><br>Four checkboxes are displayed with two selected by default<br>New button displayed : Return product |
| Type the quantity to return > Click on *Return product* button | Alert displayed : "Please select at least one product." |
| Click on *Return product* button > Check the *Quantity* checkbox > Click on Return product button | Message displayed : "The product was successfully returned."<br><br>The Return products in top of Orders page is disabled<br><br>New field is displayed is Products table : Refunded |
| Check your emails | Email "New credit slip regarding your order" is sent to the customer |