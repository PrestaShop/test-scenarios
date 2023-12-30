---
title: "FO - User account - Order history - Reorder order from list"
weight: 2
---

# FO - User account - Order history - Reorder order from list
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1207
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/02_orderHistory/02_reorderFromOrderList.ts

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