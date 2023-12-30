---
title: "Check Order from the BO"
weight: 1
---

# Check Order from the BO
## Details
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-2418

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Add the first partial refund | Partial refund is added successfully<br>A new document is created for the credit slips |
| Add the second partial refund | Partial refund is added successfully<br>A new document is created for the credit slips |
| Go to Orders > "Credit slips" page | Credit slips page is opened successfully |
| Reset all filters and get the credit slips number | All filters are reset<br>All credit slips are displayed<br>The credit slip number is equal 2 |
| Go to Customer service > merchandise returns> Enable returns > save | Green alerte is displayed "The settings have been successfully updated." |
| Go to the second order page > Click on cancel product | The attached page is displayed <br> !image-2022-03-24-14-42-04-332.png|thumbnail! |
| check quantity > click on cancel product<br>https://github.com/PrestaShop/PrestaShop/issues/26098#issuecomment-1075356614 | Product is canceled and the green alert is displayed > Selected products were successfully canceled.<br>The produc is not present in the order and the price is 0.000 |