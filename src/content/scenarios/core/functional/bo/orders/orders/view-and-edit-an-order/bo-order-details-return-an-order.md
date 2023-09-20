---
title: "BO - Order details - Return an order"
weight: 13
---

# BO - Order details - Return an order
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7395

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | The Orders page is well displayed<br><br>The orders are displayed in a table with title : Orders +(total number of orders) |
| change the status of the first order | Successful update message is displayed.<br><br>Status is updated to dilevered. |
| Click on *View* icon button | New Orders page is displayed<br><br>All the details of selected order are displayed |
| Click on *Return products* button | The Product section is displayed all over page width with new fields added to the table : Return products<br><br><br><br>Four checkboxes are displayed with two selected by default<br>New button displayed : Return product |
| Type the quantity(ies) to return > check the *Quantity* checkbox(es) > Click on *Return product* button | Message displayed : "The product was successfully returned."<br><br>The Return products in top of Orders page is disabled<br><br>New field is displayed is Products table : Refunded |
