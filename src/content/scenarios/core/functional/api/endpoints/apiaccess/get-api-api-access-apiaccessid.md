---
title: "GET /api/api-access/{apiAccessId}"
weight: 1
---

# GET /api/api-access/{apiAccessId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7789
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/01_apiAccess/01_getAPIApiAccessId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set checked the checkbox “Authorization server" | The checkbox “Authorization server” is checked |
| Click on Save button | The message “Update successful” is displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/api-access/\{id}" where \{id} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "apiAccessId", "clientName", "description", "enabled"<br><br>The return data keys are consistent relative to BackOffice data. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features Page is displayed correctly |
| Set unchecked the checkbox “Authorization server" | The checkbox “Authorization server” is unchecked |
| Click on Save button | The message “Update successful” is displayed |
