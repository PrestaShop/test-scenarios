---
title: "BO - Advanced Parameter - Authorization Server - CRUD"
weight: 1
---

# BO - Advanced Parameter - Authorization Server - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7068
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/12_authorizationServer/01_CRUD.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/authorization-server-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set checked the checkbox “Authorization server" | The checkbox “Authorization server” is checked |
| Click on Save button | The message “Update successful” is displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new access" | New access Page is displayed correctly |
| Fill the form with following data (App Name : "Application XYZ", Description: "Description ABC")<br>Click on Save button | The message “Successful creation” is displayed<br>There is 1 application in the list |
| Click on the edit button on the first row | Editing application Page is displayed correctly |
| Fill the form with following data (App Name : "Application UVW", Description: "Description DEF")<br>Click on Save button | The message “Successful update” is displayed<br>There is 1 application in the list |
| On the first row, click on the button “Three points” | The dropdown is displayed. |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set unchecked the checkbox “Authorization server" | The checkbox “Authorization server” is unchecked |
| Click on Save button | The message “Update successful” is displayed |
