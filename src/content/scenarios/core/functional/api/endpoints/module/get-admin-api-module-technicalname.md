---
title: "GET /admin-api/module/{technicalName}"
weight: 8
---

# GET /admin-api/module/{technicalName}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8932
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/07_module/08_getModuleTechnicalName.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Modules > Module Manager | Module Manager Page is displayed correctly. |
| Filter on the module name for a specific module and fetch the module technical name. | 1 record found. |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/module/\{technicalName}" where \{technicalName} is the previous technicalName get | The return value is in JSON.<br><br>The return data has multiples keys : "moduleId", "technicalName", "version", "enabled", "installed"<br><br>The return data keys are consistent relative to BackOffice data. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
