---
title: "BO - Advanced Parameter - Authorization Server - Edit API Access"
weight: 3
---

# BO - Advanced Parameter - Authorization Server - Edit API Access
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7634
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/12_authorizationServer/03_editAPIAccess.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set checked the checkbox “Authorization server" | The checkbox “Authorization server” is checked |
| Click on Save button | The message “Update successful” is displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the edit button | Edit API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client UVW", Client Name: "ClientName DEF")<br>Click on "Save" button | The message “Successful update” is displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set unchecked the checkbox “Authorization server" | The checkbox “Authorization server” is unchecked |
| Click on Save button | The message “Update successful” is displayed |
