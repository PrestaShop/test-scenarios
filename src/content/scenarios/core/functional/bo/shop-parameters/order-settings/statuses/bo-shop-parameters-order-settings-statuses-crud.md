---
title: "BO - Shop Parameters - Order Settings - Statuses - CRUD"
weight: 2
---

# BO - Shop Parameters - Order Settings - Statuses - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1059
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/statuses/01_CRUDOrderStatus.ts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Shop Parameters> Order Settings> Statuses | Statuses page is well displayed |
| Click on _Add new order status_ button | Add new status page is displayed |
| Fill the order status form,<br><br>save | Statuses page is displayed.<br><br>Successful creation message is displayed.<br><br>New order statuses is added and total statuses +1 |
| Click on the Edit button of new order status added | Edit new order statuses page is displayed. |
| Edit the order status,<br><br>save. | Statuses page is displayed.<br><br>Successful update message is displayed.<br><br>The order status is well updated. |
| Click on dropdown button of new order stauts added,<br><br>Delete | a popup is displayed :<br><br> <br>{code:java}<br>Delete selected item?<br>Name: Prestashop test_edited<br>YES - NO{code} |
| Click on YES button | Successful deletion message is displayed.<br>The order is deleted. |
