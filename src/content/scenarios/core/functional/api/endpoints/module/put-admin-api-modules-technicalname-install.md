---
title: "PUT /admin-api/modules/{technicalName}/install"
weight: 3
---

# PUT /admin-api/modules/{technicalName}/install
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10018
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_module/03_putModulesTechnicalNameInstall.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| Go to modules manager page | The page title should contains 'Module manager' |
| Set the name of the module "Keycloak connector demo" in the search bar<br>Click on the search button | The module is not displayed |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/modules/upload-source" with data | The HTTP code is 201.<br><br>The response is in JSON.<br><br>The return data has multiples keys : "moduleId", "technicalName", "moduleVersion", "installedVersion", "enabled", "installed"<br><br>The return data keys are consistent relative to these data :<br><br>{color:#000000}{{color}<br>{color:#a31515} "moduleId"{color}{color:#000000}: {color}{color:#0451a5}null{color}{color:#000000},{color}<br>{color:#a31515} "technicalName"{color}{color:#000000}: {color}{color:#0451a5}"keycloak_connector_demo"{color}{color:#000000},{color}<br>{color:#a31515} "moduleVersion"{color}{color:#000000}: {color}{color:#0451a5}"1.1.0"{color}{color:#000000},{color}<br>{color:#a31515} "installedVersion"{color}{color:#000000}: {color}{color:#0451a5}null{color}{color:#000000},{color}<br>{color:#a31515} "enabled"{color}{color:#000000}: {color}{color:#0451a5}false{color}{color:#000000},{color}<br>{color:#a31515} "installed"{color}{color:#000000}: {color}{color:#0451a5}false{color}<br>} |
| Request with method PUT the endpoint "https://[url of your shop]/admin-api/modules/\{technicalName}/install" with data<br><br>Where technicalName = keycloak_connector_demo | The HTTP code is 200.<br><br>The response is in JSON.<br><br>The return data has multiples keys : "moduleId", "technicalName", "moduleVersion", "installedVersion", "enabled", "installed"<br><br>The return data keys are consistent relative to these data :<br><br>{color:#000000}{{color}<br>{color:#a31515} "moduleId"{color}{color:#000000}: {color}{color:#0451a5}null{color}{color:#000000},{color}<br>{color:#a31515} "technicalName"{color}{color:#000000}: {color}{color:#0451a5}"keycloak_connector_demo"{color}{color:#000000},{color}<br>{color:#a31515} "moduleVersion"{color}{color:#000000}: {color}{color:#0451a5}"1.1.0"{color}{color:#000000},{color}<br>{color:#a31515} "installedVersion"{color}{color:#000000}: {color}{color:#000000}{color:#0451a5}"1.1.0"{color},{color}<br>{color:#a31515} "enabled"{color}{color:#000000}: {color}{color:#0451a5}true{color}{color:#000000},{color}<br>{color:#a31515} "installed"{color}{color:#000000}: {color}{color:#0451a5}true{color}<br>} |
| Reload the page<br>Set the name of the module "Keycloak connector demo" in the search bar<br>Click on the search button | The module is displayed<br>The module is installed<br>The module is enabled |
| Use the module action and uninstall it (with deletion) | The successful message is displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
