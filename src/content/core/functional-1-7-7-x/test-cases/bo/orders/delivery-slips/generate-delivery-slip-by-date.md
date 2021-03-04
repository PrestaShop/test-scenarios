---
title: Generate Delivery Slip By Date
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Orders > Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully. The delivery slip document is created successfully |
| Go to "Orders > Delivery slips" page | Delivery slips page is displayed successfully |
| Click on generate pdf by date | The file is downloaded successfully |
| Enter a future date in From and To fields. Click on generate pdf by date | An error message is displayed. "No delivery slip was found for this period." |
