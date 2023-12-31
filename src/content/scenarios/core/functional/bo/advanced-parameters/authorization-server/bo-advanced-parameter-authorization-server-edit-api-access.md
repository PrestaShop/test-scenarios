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
| Fill the form with following data<br>Click on "Save" button | The message “Successful update” is displayed<br><br>Check that data are well filled |
| Disable the application | The message “Successful update” is displayed<br><br>Check that data are well filled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table<br>The API access on the first row is disabled |
| On the first row, click on the edit button | Edit API access Page is displayed correctly |
| Enable the application | The message “Successful update” is displayed<br><br>Check that data are well filled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table<br>The API access on the first row is enabled |
| On the first row, click on the edit button | Edit API access Page is displayed correctly |
| Click on the button "Regenerate a client secret" | A modal appear :<br> * Title : Regenerate client secret?<br> * Message : If you regenerate your client secret, your former secret will become obsolete.<br> * Confirm Button : Regenerate client secret |
| Click on the button "Regenerate client secret" in the modal | The message “Your new client secret has been generated successfully. Your former client secret is now obsolete. This secret value will only be displayed once. Don't forget to make a copy in a secure location.” is displayed<br>The message "Client secret: " is displayed |
| Click on the "Copy" button | The clipboard contains the value of the client secret |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set unchecked the checkbox “Authorization server" | The checkbox “Authorization server” is unchecked |
| Click on Save button | The message “Update successful” is displayed |
