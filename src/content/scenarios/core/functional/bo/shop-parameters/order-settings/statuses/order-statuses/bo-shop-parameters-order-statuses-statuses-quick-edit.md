---
title: "BO - Shop Parameters - Order Statuses - Statuses - Quick edit"
weight: 1
---

# BO - Shop Parameters - Order Statuses - Statuses - Quick edit
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7760
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/statuses/03_quickEdit.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/order-settings/statuses/add-new-edit-order-status

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Shop Parameters> Order Settings> Statuses | Statuses page is well displayed |
| Go to  _send email to customer_ column and edit it. | _*The status has been updated successfully*_ message is displayed |
| Go to  _send email to customer_ column and edit it. | _*The status has been updated successfully*_ message is displayed |
| Go to  _In transit_ column and edit it. | _*The status has been updated successfully*_ message is displayed |
| Go to _Invoice_ column and edit it. | _*The status has been updated successfully*_ message is displayed |
