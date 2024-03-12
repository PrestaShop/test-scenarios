---
title: "GET /api/customers/group/{customerGroupId}"
weight: 2
---

# GET /api/customers/group/{customerGroupId}
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8642

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Shop Parameters > Customer Settings | Customer Settings Page is displayed correctly. |
| Click on the Groups tab | Customers - Groups page is well displayed |
| Reset all filters of Groups table | All filters are reset. <br>All Groups are displayed.<br>Fetch the ID of the first row. |
| Click on Edit for the first row | The Edit page will be displayed correctly |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/customers/group/\{customerGroupId}" where \{customerGroupId} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "customerGroupId", "localizedNames", "reductionPercent", "displayPriceTaxExcluded", "showPrice", "shopIds"<br><br>The return data keys are consistent relative to BackOffice data. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
