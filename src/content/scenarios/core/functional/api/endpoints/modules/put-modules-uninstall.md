---
title: "PUT /modules/uninstall"
weight: 2
---

# PUT /modules/uninstall
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10027

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| Go to modules manager page | The page title should contains 'Module manager' |
| Click on the button "Upload a module" | The modal "Upload a module" is displayed. |
| Upload the module "Keycloak connector demo" | The module is installed |
| Request with method POST the endpoint "https://[url of your shop]/admin-dev/index.php/api/modules/uninstall" with data | The HTTP code is 204 |
| Reload the page<br>Set the name of the module "Keycloak connector demo" in the search bar<br>Click on the search button | The module is displayed<br>The module is not installed |
| Use the module action "Install" | The successful message is displayed. |
| Set the name of the module "ps_cashondelivery" in the search bar<br>Click on the search button | The module is displayed<br>The module is not installed |
| Use the module action "Install" | The successful message is displayed. |
| Request with method POST the endpoint "https://[url of your shop]/admin-dev/index.php/api/modules/uninstall" with data | The HTTP code is 204 |
| Reload the page<br>Set the name of the module "Keycloak connector demo" in the search bar<br>Click on the search button | The module is not displayed<br><br>_(Module (not native) is not listed by the API Distribution Client)_ |
| Set the name of the module "ps_cashondelivery" in the search bar<br>Click on the search button | The module is displayed<br>The module is not installed<br><br>_(Module (native) is listed by the API Distribution Client)_ |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
