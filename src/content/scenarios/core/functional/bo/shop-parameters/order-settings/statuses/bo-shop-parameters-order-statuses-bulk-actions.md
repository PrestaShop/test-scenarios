---
title: "BO - Shop Parameters - Order Statuses - Bulk actions"
weight: 5
---

# BO - Shop Parameters - Order Statuses - Bulk actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters  > Order Settings | Page titles contains "Order settings" |
| Go to Statuses tab | * Page title contains "Statuses"<br> * All Statuses shouldn't have checkbox and a down arrow on the right of the edit button |
| Create a [new order status|https://forge.prestashop.com/browse/TEST-3211] | Your newly created Order Status is displayed and can be Checked, Edited and Deleted |
| Check your newly created Order status > Click on Bulk actions > Delete selected > OK | The order status is deleted<br><br>Message "The selection has been successfully deleted" is displayed |
| Create a [new order return status|https://forge.prestashop.com/browse/TEST-3220] | Your newly created Return Status is displayed and can be Checked, Edited and Deleted |
| Click on Bulk action > Select all in block Return status > Click on Bulk action > Delete selected > OK | The return status is deleted<br><br>Message "The selection has been successfully deleted" is displayed |
