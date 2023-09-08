---
title: "BO - Order details - Return an order"
weight: 13
---

# BO - Order details - Return an order
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7395

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | The Orders page is well displayed<br><br>The orders are displayed in a table with title : Orders +(total number of orders) |
| Click on *Status* dropdown field > Select *Delivered >* Click *Search* button | Delivered orders are displayed<br><br>number of total orders in the table title is updated<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *View* icon button in first line | New Orders page is displayed<br><br>All the details of selected order are displayed |
| Click on *Return products* button | The Product section is displayed all over page width with new fields added to the table : Return products<br><br><br><br>Four checkboxes are displayed with two selected by default<br>New button displayed : Return product |
| Type the quantity(ies) to return > check the *Quantity* checkbox(es) > Click on *Return product* button | Message displayed : "The product was successfully returned."<br><br>The Return products in top of Orders page is disabled<br><br>New field is displayed is Products table : Refunded |
| Click on status dropdown > select Refunded > Click on Update status | Message displayed : "Successful update"<br><br>Status is updated : Refunded |
