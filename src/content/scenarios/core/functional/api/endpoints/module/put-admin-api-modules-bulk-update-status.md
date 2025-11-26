---
title: "PUT /admin-api/modules/bulk-update-status"
weight: 9
---

# PUT /admin-api/modules/bulk-update-status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8934
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_module/09_putModulesBulkUpdateStatus.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Modules > Module Manager page | Module Manager Page is displayed correctly. |
| Fetch two first modules |  |
| Request with method PUT the endpoint "https://[url of your shop]/admin-api/modules/bulk-update-status" with data | The HTTP code is 204.<br><br>The return value is empty. |
| Reload the "Module Manager page | Module Manager Page is displayed correctly.<br><br>Two modules tested are disabled |
| Request with method PUT the endpoint "https://[url of your shop]/admin-api/modules/bulk-update-status" with data | The HTTP code is 204.<br><br>The return value is empty. |
| Reload the "Module Manager page | Module Manager Page is displayed correctly.<br><br>Two modules tested are enabled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
