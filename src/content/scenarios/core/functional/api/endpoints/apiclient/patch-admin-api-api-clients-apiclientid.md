---
title: "PATCH /admin-api/api-clients/{apiClientId}"
weight: 4
---

# PATCH /admin-api/api-clients/{apiClientId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8647
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/01_apiClient/04_patchApiClientsId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the second row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Click on the edit row on the second row | Edit API access Page is displayed correctly |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "clientId" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key clientId has the updated value. |
| Reload the Edit page | Check that the input value for field "clientId" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "clientName" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key clientName has the updated value. |
| Reload the Edit page | Check that the input value for field "clientName" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "description" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key description has the updated value. |
| Reload the Edit page | Check that the input value for field "description" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "enabled" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key enabled has the updated value. |
| Reload the Edit page | Check that the input value for field "enabled" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "lifetime" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key lifetime has the updated value. |
| Reload the Edit page | Check that the input value for field "lifetime" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/api-clients/\{apiClientId}" for updating the field "scopes" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key scopes has the updated value. |
| Reload the Edit page | Check that the input value for field "scopes" is updated |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
