---
title: Generate Credit Slips By Date
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Open the FO page | The home page is opened successfully |
| Add the first product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the default account "pub@prestashop.com" | The customer is logged successfully |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Go to "BO > Orders > Orders" page | Orders list is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Add a partial refund product | the credit slip document is created successfully |
| Go to "Orders > Credit slips" page | Credit slips page is displayed successfully |
| Generate PDF file by date | The file exists in the disk |
| Put a future date in From and To field | An error message is displayed<br>"No invoice has been found for this period." |
