---
title: "BO - Shop Parameters - Order Settings - Statuses : CRUD Order Status"
weight: 1
---

# BO - Shop Parameters - Order Settings - Statuses : CRUD Order Status
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3211
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/statuses/01_CRUDOrderStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/order-settings/statuses/add-new-edit-order-status

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters  > Order Settings > Go to Statuses tab | Page title contains "Statuses" |
| Click on the "Add new order status" | Add new Order status page is displayed |
| Fill all fields > Save | Message Successful creation is displayed<br><br>Newly created order status is displayed in Statuses block<br><br>Latest Order status can be Checked, Edited and Deleted |
| Choose the new status added and click on _*Edit*_ button | The page Edit is displayed |
| Edit Status name, icon and color and click on save | The page Status is displayed automatically and a  *_Successful update_* message is displayed |
| Choose the new status added and click dropdown button and choose the _*Delete*_ button | A popup message is appeare :<br><br>_Delete selected item?_<br><br>_Name: Status name_tested_ |
| Click on Yes | The status is deleted |
