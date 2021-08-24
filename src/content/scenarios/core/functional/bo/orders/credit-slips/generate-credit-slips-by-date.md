---
title: "Generate Credit Slips By Date"
weight: 3
---

# Generate Credit Slips By Date
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Add a partial refund product | the credit slip document is created successfully |
| Go to Orders > "Credit slips" page | Credit slips page is displayed successfully |
| Generate PDF file by date | The file exists in the disk |
| Put a future date in From and To field | An error message is displayed<br>"No invoice has been found for this period." |
