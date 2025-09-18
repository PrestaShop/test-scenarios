---
title: "GET /admin-api/customers/groups"
weight: 5
---

# GET /admin-api/customers/groups
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11771
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_customerGroup/05_getCustomerGroups.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/customers/groups" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "sortOrder", "limit", "filters", "items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "customerGroupId", "customers", "name", "reductionPercent", "showPrice" |
| In BO, Go to Shop Parameters > Customer Settings | Customer Settings Page is displayed correctly. |
| Click on the Groups tab | Customers - Groups page is well displayed |
| Reset all filters of Groups table | All filters are reset. <br>All Groups are displayed.<br>Fetch the ID of the first row. |
| *Loop on each item of the key items of the JSON Response* |  |
| Filter on the customer group ID for a specific customer group | 1 record found.<br><br>Check that the JSON Response has the same data in the BackOffice :<br> * customerGroupId<br> * name<br> * customers<br> * reductionPercent<br> * showPrice |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
