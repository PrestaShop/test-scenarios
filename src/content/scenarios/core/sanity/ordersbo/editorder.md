---
title: "EditOrder"
weight: 1
---

# EditOrder
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7980
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/02_ordersBO/02_editOrder.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders" page" | Orders page is displayed correctly |
| Click on the first order | Order page is displayed correctly |
| Modify the product quantity. Click on Update" | Order is updated correctly |
| Modify the payment status. Click on Update status" | Status is updated. A new line is added in the history |
| Logout from the BO | Logout successful |
