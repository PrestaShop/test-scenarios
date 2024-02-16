---
title: "FO - User account - Order history - Order details - Reorder order from details"
weight: 4
---

# FO - User account - Order history - Order details - Reorder order from details
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8340

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Sign In to your customer account > Add a product to your cart > Proceed to checkout > Proceed to checkout > Place the order | Your order is confirmed |
| Go to "Orders" page | "Order history" page is displayed |
| Click on the Details link of the latest order made > Click on the "Reorder" button | You are redirected to step 2 - Addresses |
| Place the order | Your order is confirmed |
| Click on your account > Orders > Click on Details on the latest order made | See that the product ordered is the same : Hummingbird printed sweater |
