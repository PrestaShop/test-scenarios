---
title: "BO - Orders - Bulk actions status"
weight: 9
---

# BO - Orders - Bulk actions status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7504
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/05_bulkUpdateOrdersStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| From BO > Go to the Orders > Orders" page" | Orders listing is displayed correctly |
| Select the 2 last orders from the list, click on Bulk actions button and Click on "Change Order Status" | A modal "Choose an order status" is displayed |
| Select "Payment accepted and click on "Update status" | An alert "Successful update." is displayed and the Order status is updated to "Payment accepted" |
