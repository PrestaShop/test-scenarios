---
title: "BO - Shop Parameters - Order Statuses - CRUD order return status"
weight: 1
---

# BO - Shop Parameters - Order Statuses - CRUD order return status
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3220

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > Tab Statuses | Page titles contains "Statuses" |
| Click on the "Add new order return status" | Page title contains "Return status" |
| Fill all fields > Save | The page Status is displayed automatically and a  *_Successful creation_* message is displayed |
| Choose the new status added and click on _*Edit*_ button | The page Edit is displayed |
| Edit Status name, icon and color and click on save | The page Status is displayed automatically and a  *_Successful update_* message is displayed |
| Choose the new status added and click dropdown button and choose the _*Delete*_ button | A popup message is appeare :<br><br>_Delete selected item?_<br><br>_Name: Status name_tested_ |
| Click on Yes | The status is deleted |
