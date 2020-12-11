---
title: Enable Disable Invoices
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Orders > Invoices" page | Invoices page is displayed successfully |
| Disable invoices and save the form | The invoice is disabled successfully<br>	<br>The validation message is displayed successfully<br>"Update successful" |
| Go to "Orders > Orders" page | Orders page is displayed successfully |
| Open the fourth-order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>The invoice is not created |
| Go to "Orders > Invoices" page | Invoices page is displayed successfully |
| Enable invoices and save the form | The invoice is enabled successfully<br>	<br>The validation message is displayed successfully<br>"Update successful" |
| Go to "Orders > Orders" page | Orders page is displayed successfully |
| Open the third-order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>The invoice is created successfully |
