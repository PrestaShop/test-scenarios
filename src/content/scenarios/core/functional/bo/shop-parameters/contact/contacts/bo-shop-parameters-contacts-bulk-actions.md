---
title: "BO - Shop Parameters - Contacts - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Contacts - Bulk actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Contacts Tab | Contacts page is well displayed |
| Create 2 contacts using the following test | Number of contacts after creation = total of contacts + 2 |
| {color:#C1C7D0} This step was calling test issue TEST-1096 (possibly downgraded){color} |  |
| Check the 2 newly created Contact > Bulk actions > Delete selected > Delete | Message The selection has been successfully deleted is displayed<br><br>Number of contacts after deletion = original total of contacts |
