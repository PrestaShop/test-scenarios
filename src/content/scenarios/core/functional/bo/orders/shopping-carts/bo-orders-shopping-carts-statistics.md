---
title: "BO - Orders - Shopping carts - Statistics"
weight: 7
---

# BO - Orders - Shopping carts - Statistics
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-779

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add products to Cart | Products are well added to the Cart |
| Go to BO >  Orders > Shopping carts | See the last Shopping Cart has the status "Non ordered" |
| Wait for 48 hours (change it in the database) | See the latest Shopping cart status has changed to "Abandoned cart" |
| Click on Abandoned Carts in the statistics block | See in Statistics block, the number of abandoned carts should be 1.<br>See the gridlist is updated with Abandoned carts with status |
| Click View my store > Add any product to your cart > Proceed to checkout | Your order is confirmed |
| Go to BO > Orders > Orders > Change Status of order to "Payment accepted" | Successful update message is displayed |
| Go to > Orders > Shopping carts | See that Conversion Rate, Average Order Value and Net Profit per Visit is still 0 |
