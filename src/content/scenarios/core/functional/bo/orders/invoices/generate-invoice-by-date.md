---
title: "Generate Invoice By Date"
weight: 1
---

# Generate Invoice By Date
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > "Orders" page | Orders listing is displayed correctly |
| Go to the first order page | The order page is displayed successfully |
| Click on Update Status to Change the order status to "Shipped" | The status is changed successfully |
| Go to the second order page | The order page is displayed successfully |
| Click on Update Status to Change the order status to "Payment accepted" | The status is changed successfully |
| Go to the Orders > "Invoices" page | Invoices page is displayed correctly |
| Click on Generate PDF file by date with the current date and check the file existence | The pdf file is generated successfully with the correct configured data (see pre-conditions) |
| Check the error message when there is no invoice in the entered date | The error message is displayed successfully<br>No invoice has been found for this period." |
