---
title: Generate Invoice By Date
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Orders > Orders" page | Orders listing is displayed correctly |
| Go to the fisrt order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully |
| Go to the second order page | The order page is displayed successfully |
| Change the order status to "Payment accepted" | The status is changed successfully |
| Go to the "Orders > Invoices" page | Invoices page is displayed correctly |
| Generate PDF file by date and check the file existence | The pdf file is generated successfylly |
| Check the error message when there is no invoice in the entered date | The error message is displayed successfully<br>"No invoice has been found for this period." |
