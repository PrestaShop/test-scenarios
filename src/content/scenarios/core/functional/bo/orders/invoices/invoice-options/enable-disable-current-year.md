---
title: "Enable Disable Current Year"
weight: 5
---

# Enable Disable Current Year
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Invoices" page | Invoices page is displayed successfully |
| Enable Add current year to invoice number<br>Choose the option After the sequential number and save | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>the current year exists in the invoice file name at the end |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Choose the option Before the sequential number and save | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>the current year exists in the invoice file name at the beginning |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Disable Add current year to invoice number and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully<br>the current year does not exist in the invoice file name |
