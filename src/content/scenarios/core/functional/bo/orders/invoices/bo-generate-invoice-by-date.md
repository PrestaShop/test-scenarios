---
title: "BO - Generate Invoice By Date"
weight: 1
---

# BO - Generate Invoice By Date
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Orders" page | Orders listing is displayed correctly |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" > Click on "Update Status" button | * A "Successful update." is well displayed<br> * The status is changed successfully |
| Go back to Orders > "Orders" page | The order page is displayed successfully |
| Change the order status to "Payment accepted" > Click on "Update Status" button | * A "Successful update." is well displayed<br> * The status is changed successfully |
| Go to the Orders > "Invoices" page | Invoices page is displayed correctly |
| Go to "By date" section > Click on "Generate PDF file" button with the current date > Check the file existence | The pdf file is generated successfully with the correct configured data (see pre-conditions) |
| Change the date to previous period when there is no invoice in the entered date in the "By date" section  > Click on "Generate PDF file" button | An error message "No invoice has been found for this period." is well displayed |
