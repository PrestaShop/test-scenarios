---
title: "BO - Shop Parameters - Contacts - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Contacts - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1097
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/https://github.com/PrestaShop/PrestaShop/blob/develop/tests/UI/campaigns/functional/BO/13_shopParameters/05_contact/03_contactBulkActions.ts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Contacts Tab | Contacts page is well displayed |
| Create 2 contacts using the following test | Number of contacts after creation = total of contacts + 2 |
| Go to BO > Shop parameters > Contacts > Contacts tab | Contacts page is well displayed |
| Click Add new contact button | Page title contains 'Add new:' |
| Create contact<br>(faker data) | Message Successful creation is displayed<br><br>Number of contacts after creation = total of contacts + 1 |
| Filter list by email with latest email of created contact | Contact is displayed in list |
| Click on the pen to edit the contact | Page title contains 'Edit:' |
| Update contact<br>(faker data) | Message Successful update is displayed<br><br>Number of contacts after creation = total of contacts + 1<br><br>Filtered contact in list is still displayed with updated data |
| Click 3-dot button > Delete > Delete | Message Successful deletion is displayed<br><br>No records found is displayed in list |
| Click on Reset | All original contacts are displayed |
| Check the 2 newly created Contact > Bulk actions > Delete selected > Delete | Message The selection has been successfully deleted is displayed<br><br>Number of contacts after deletion = original total of contacts |
