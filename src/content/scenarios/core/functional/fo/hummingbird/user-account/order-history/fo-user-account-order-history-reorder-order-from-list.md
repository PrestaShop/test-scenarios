---
title: "FO - User account - Order history - Reorder order from list"
weight: 2
---

# FO - User account - Order history - Reorder order from list
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8338

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO |  |
| Login with a customer account |  |
| Buy a product | The order is complete and the order confirmation page is displayed |
| Go to " account" page |  |
| Go to "Order history and details" | See the last order |
| Click on "reorder" | Redirect to payement section |
| Paid the order |  |
| Go to "Order history and details" | The reorder order is displayed |
| Check if the product is the same about the first order | Same product are order for the first order and the reorder |
