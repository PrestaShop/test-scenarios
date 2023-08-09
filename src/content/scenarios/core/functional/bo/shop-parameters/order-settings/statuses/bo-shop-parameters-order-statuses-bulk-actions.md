---
title: "BO - Shop Parameters - Order Statuses - Bulk actions"
weight: 5
---

# BO - Shop Parameters - Order Statuses - Bulk actions
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1062

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters  > Order Settings > Go to Statuses tab | * Page title contains "Statuses"<br> * All Statuses shouldn't have checkbox and a down arrow on the right of the edit button |
| Go to BO > Shop Parameters  > Order Settings > Go to Statuses tab | Page title contains "Statuses" |
| Click on the "Add new order status" | Add new Order status page is displayed |
| Fill all fields > Save | Message Successful creation is displayed<br><br>Newly created order status is displayed in Statuses block<br><br>Latest Order status can be Checked, Edited and Deleted |
| Choose the new status added and click on _*Edit*_ button | The page Edit is displayed |
| Edit Status name, icon and color and click on save | The page Status is displayed automatically and a  *_Successful update_* message is displayed |
| Choose the new status added and click dropdown button and choose the _*Delete*_ button | A popup message is appeare :<br><br>_Delete selected item?_<br><br>_Name: Status name_tested_ |
| Click on Yes | The status is deleted |
| Create 10 new order statuses | Your newly created Order Statuses are displayed and can be Checked, Edited and Deleted<br><br>Pagination can display 50 results |
| Change pagination display to 20 results per page | Pagination is updated with 20 results per page<br><br>Navigation is on 2 pages now |
| Check 1 Order status > Click on Bulk actions > Delete selected > OK | The order status is deleted<br><br>Message "The selection has been successfully deleted" is displayed |
| Change pagination display back to 50 results per page | Pagination is updated with 50 results per page. All results are displayed.<br><br>Navigation is on 1 page. |
| In Statuses block > Bulk actions > Select All > Bulk Actions > Delete selected > OK | The order statuses are deleted<br><br>Message "The selection has been successfully deleted" is displayed<br><br>Bulk Action buttons has disappeared |
| Go to BO > Shop Parameters > Order Settings > Tab Statuses | Page titles contains "Statuses" |
| Click on the "Add new order return status" | Page title contains "Return status" |
| Fill all fields > Save | The page Status is displayed automatically and a  *_Successful creation_* message is displayed |
| Choose the new status added and click on _*Edit*_ button | The page Edit is displayed |
| Edit Status name, icon and color and click on save | The page Status is displayed automatically and a  *_Successful update_* message is displayed |
| Choose the new status added and click dropdown button and choose the _*Delete*_ button | A popup message is appeare :<br><br>_Delete selected item?_<br><br>_Name: Status name_tested_ |
| Click on Yes | The status is deleted |
| Create 16 new order return statuses | Your newly created Return Statuses are displayed and can be Checked, Edited and Deleted |
| Change pagination display to 20 results per page | Pagination is updated with 20 results per page<br><br>Navigation is on 2 pages now |
| Check 1 Return status > Click on Bulk actions > Delete selected > OK | The return status is deleted<br><br>Message "The selection has been successfully deleted" is displayed |
| Change pagination display back to 50 results per page | Pagination is updated with 50 results per page. All results are displayed.<br><br>Navigation is on 1 page. |
| In Return statuses block > Bulk actions > Select All > Bulk Actions > Delete selected > OK | The return statuses are deleted<br><br>Message "The selection has been successfully deleted" is displayed<br><br>Bulk Action buttons has disappeared |
