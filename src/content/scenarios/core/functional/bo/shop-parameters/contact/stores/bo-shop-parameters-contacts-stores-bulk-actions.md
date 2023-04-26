---
title: "BO - Shop Parameters - Contacts - Stores - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Contacts - Stores - Bulk actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Stores Tab | Stores page is well displayed |
| Create 2 Stores using the following test | Number of stores after creation = total of stores + 2 |
| Go to Shop Parameters ->Contact ->Stores | The stores page is displayed |
| Click on add new store | Add new store is displayed correctly |
| Fill all information -> click on save | New store is saved correctly.<br><br>Message is displayed "Successful creation"<br><br>Redirection to store page<br><br>Number of stores after creation = total of stores + 1 |
| Filter list by name with latest name of created store | the store  is displayed in list |
| click on the drop down button >Delete >click on the popup message 'yes' | Message Successful deletion is displayed |
| Check the 2 newly created Stores > Bulk actions > Disable  selection | Message The status has been successfully updated.<br><br>Number of stores after creation = total of stores + 2 |
| Check the 2 newly created Stores > Bulk actions > Enable  selection | Message The status has been successfully updated.<br><br>Number of stores after creation = total of stores + 2 |
| Check the 2 newly created Stores > Bulk actions > Delete  selected | Message The selection has been successfully deleted is displayed<br><br>Number of stores after deletion = original total of stores |
