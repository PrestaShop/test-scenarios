---
title: "BO - Catalog - Files - Bulk Actions"
weight: 2
---

# BO - Catalog - Files - Bulk Actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-828

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Files page | Title contains 'Files' |
| Select 1 file > Click Bulk actions > Delete selected > Delete | Green alert "The selection has been successfully deleted" id displayed |
| Select 2 files > Click Bulk actions > Delete selected > Delete | Green alert "The selection has been successfully deleted" id displayed |
| Select all files > Click Bulk actions > Delete selected > Delete | Green alert "The selection has been successfully deleted" is displayed<br><br>All files are deleted<br><br>See the card "Upload files here" is displayed |