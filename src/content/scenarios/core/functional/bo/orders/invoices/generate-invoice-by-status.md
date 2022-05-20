---
title: "Generate Invoice By Status"
weight: 2
---

# Generate Invoice By Status
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > "Orders" page | Orders listing is displayed correctly |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully |
| Go to the second order page | The order page is displayed successfully |
| Change the order status to "Payment accepted" | The status is changed successfully |
| Go to the Orders > "Invoices" page | Invoices page is displayed correctly |
| Check the color and number in the square for both status "Payment accepted" and "Shipped" | The square have "1" as a number and "green" as a color |
| Check the color and number in the square for the others status that haven't been ordered | The square have "0" as a number and "red" as a color |
| Click on "Generate PDF file by status" without checking boxes and check the error message | The error message is displayed successfully "You must select at least one order status." |
| Select any  status that have "zero"  and a "red" color in the square then click on "Generate PDF file by status" button" | The error message is displayed successfully "No invoice has been found for this status." |
| Choose the statuses Payment accepted" and "Shipped" together then click on "Generate PDF file by status" | The pdf file is generated successfully with "invoices" as it's name with the correct configured data and check that there is two pages for both orders |
| Choose only one status "Payment accepted" OR '"Shipped"then click on "Generate PDF file by status" | The pdf file is generated successfully with "IN000002" as it's name with the correct configured data and check that there only one page for the generated order statuses |
