---
title: "BO - Catalog - Files - CRUD"
weight: 1
---

# BO - Catalog - Files - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-827
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/06_files/01_CRUDFile.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Files | Files page is displayed<br>Title contains 'Files' |
| Click on "Create New File" | Title contains 'Add new file' |
| Set these fields:<br><br>- File name<br><br>- Description<br><br>- File | Message "Successful creation." is displayed<br><br>The list of files is updated. |
| Click on the 3-dot button > View file | File should be downloaded<br>Name of file is correct |
| Click on the edit button | Title contains 'Edit:' |
| Click on Download current file button | File should be downloaded<br>Name of file is correct |
| Set these fields:<br> - File name<br><br> - Description<br><br> - File | Message "Successful update." is displayed |
| Click on the 3-dot button > View file | File should be downloaded<br>Name of file is correct |
| Delete the file and confirm the deletion | Message "Successful deletion." is displayed |