---
title: "PUT /admin-api/hooks/{hookId}/status"
weight: 1
---

# PUT /admin-api/hooks/{hookId}/status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11996
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/04_hook/01_putHooksIdStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Design > Positions | Positions Page is displayed correctly. |
| Get the ID of the first hook of the page | !https://forge.prestashop.com/plugins/servlet/raven/attachment/1571/ID+hook.png|width=777,height=514! |
| Request with method PUT the endpoint "https://[url of your shop]/admin-api/hooks/\{hookId}/status" where \{hookId} is the previous hook ID get with data | The return value is in JSON.<br><br>The return data has multiples keys :<br> * "hook"<br> * "enabled"<br> * "name"<br> * "title"<br> * "description"<br><br>The return data keys are consistent relative to BackOffice data. |
| Reload the Positions page | Check that the hook is disabled |
| Request with method PUT the endpoint "https://[url of your shop]/admin-api/hooks/\{hookId}/status" where \{hookId} is the previous hook ID get with data | The return value is in JSON.<br><br>The return data has multiples keys :<br> * "hook"<br> * "enabled"<br> * "name"<br> * "title"<br> * "description"<br><br>The return data keys are consistent relative to BackOffice data. |
| Reload the Positions page | Check that the hook is enabled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
