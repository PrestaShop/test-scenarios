---
title: Create Filter Credit Slips
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Open the FO | Home page is displayed successfully |
| Add the first product to the cart | The cart page is opened<br>There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the default account "pub@prestashop.com" | The customer is logged successfully |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Go to "BO > Orders > Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Add the first partial refund | Partial refund is added successfully<br>A new document is created for the credit slips |
| Add the first partial refund | Partial refund is added successfully<br>A new document is created for the credit slips |
| Go to "Orders > Credit slips" page | Credit slips page is opened successfully |
| Reset all filters and get the credit slips number | All filters are reset<br>All credit slips are displayed<br>The credit slip number is equal 2 |
| Filter By id_credit_slip<br>Criteria : "1" | Credit slips list is filtered<br>Credit slips listed have "1" in their id_credit_slip |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_order<br>Criteria : "4" | Credit slips list is filtered<br>Credit slips listed have "4" in their id_order |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter by date From and To<br>Criteria : today | Credit slips list is filtered<br>Credit slips listed have the date of today in their date |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_credit_slip<br>Criteria : "1" | Credit slips list is filtered<br>Credit slips listed have "1" in their id_credit_slip |
| Download the Credit Slip | The file exist in the disk |
| Reset all filters | All filters are reset<br>All credit slips are displayed |
| Filter By id_credit_slip<br>Criteria : "2" | Credit slips list is filtered<br>Credit slips listed have "2" in their id_credit_slip |
| Download the Credit Slip | The file exist in the disk |
