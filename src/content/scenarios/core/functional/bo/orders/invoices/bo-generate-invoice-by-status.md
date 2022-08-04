---
title: "BO - Generate Invoice By Status"
weight: 2
---

# BO - Generate Invoice By Status
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > "Orders" page | Orders listing is displayed correctly |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" > Click on "Update Status" button | * A "Successful update." is well displayed<br> * The status is changed successfully |
| Go back to Orders > "Orders" page | The order page is displayed successfully |
| Change the order status to "Payment accepted" > Click on "Update Status" button | * A "Successful update." is well displayed<br> * The status is changed successfully |
| Go to the Orders > "Invoices" page | Invoices page is displayed correctly |
| Go to "By order status" section > Check the color and number in the square | * For both status "Payment accepted" and "Shipped", the square have "1" as a number and "green" as a color<br> * For the others status that haven't been ordered, the square have "0" as a number and "red" as a color |
| Click on "Generate PDF file by status" button without checking boxes | The error message is displayed successfully "You must select at least one order status." |
| Select any  status that have "zero" and a "red" color in the square > Click on "Generate PDF file by status" button" | The error message is displayed successfully "No invoice has been found for this status." |
| Choose the statuses "Payment accepted" and "Shipped" together > Click on "Generate PDF file by status" button | The pdf file is generated successfully with "invoices" as its name with the correct configured data (see pre-conditions) and two pages for both orders |
| Choose only one status "Payment accepted" OR '"Shipped" > Click on "Generate PDF file by status" button | The pdf file is generated successfully with "XXXX" as its name with the correct configured data (see pre-conditions) and with only one page for the generated order statuses |
