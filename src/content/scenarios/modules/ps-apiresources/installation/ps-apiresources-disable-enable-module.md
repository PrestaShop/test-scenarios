---
title: "ps_apiresources - Disable/Enable module"
weight: 2
---

# ps_apiresources - Disable/Enable module
## Details
* **Component** : ps_apiresources
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7804
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_apiresources/01_installation/02_disableEnableModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_apiresources | The module page list should be displayed and *PrestaShop API Resources* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable PrestaShop API Resources module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Yes, disable it" button to confirm the disable of the module | * After loading, a green message "Disable action on module ps_facetedsearch succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>All scopes relative to the Core are displayed and enabled<br><br>All scopes relative to the module are displayed and enabled |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC", "Scopes": "api_client_read")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| Click on the button "Copy Client Secret" | The client secret is available |
| Request the endpoint "/access_token" with method POST<br><br>{<br>   client_id: "Client XYZ",<br>    client_secret: clientSecret,<br>    grant_type: 'client_credentials',<br>    scope: 'api_client_read'<br> } | The HTTP Response is 400<br>The HTTP Content type is application/json<br><br>The Reponse has a property error<br>The error property is equals to "invalid_scope" |
| Go back to BO > Module list page with ps_apiresources module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module ps_apiresources succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Configure" |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly<br><br>All scopes relative to the Core are displayed and enabled<br><br>All scopes relative to the module are displayed and enabled |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC", "Scopes": "api_client_read")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| Click on the button "Copy Client Secret" | The client secret is available |
| Request the endpoint "/access_token" with method POST<br><br>{<br>   client_id: "Client XYZ",<br>    client_secret: clientSecret,<br>    grant_type: 'client_credentials',<br>    scope: 'api_client_read'<br> } | The HTTP Response is 200<br>The HTTP Content type is application/json<br><br>The Reponse has a property access_token<br>The error property is a string |
