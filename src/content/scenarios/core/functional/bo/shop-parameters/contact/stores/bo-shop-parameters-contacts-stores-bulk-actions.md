---
title: "BO - Shop Parameters - Contacts - Stores - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Contacts - Stores - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1101

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Stores Tab | Stores page is well displayed |
| Create 2 Stores using the following test | Number of stores after creation = total of stores + 2 |
| Check the 2 newly created Stores > Bulk actions > Disable  selection | Message The status has been successfully updated.<br><br>Number of stores after creation = total of stores + 2 |
| Check the 2 newly created Stores > Bulk actions > Enable  selection | Message The status has been successfully updated.<br><br>Number of stores after creation = total of stores + 2 |
| Check the 2 newly created Stores > Bulk actions > Delete  selected | Message The selection has been successfully deleted is displayed<br><br>Number of stores after deletion = original total of stores |
