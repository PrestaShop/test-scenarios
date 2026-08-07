---
title: "GET /admin-api/addresses"
weight: 11
---

# GET /admin-api/addresses
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8559

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/adresses" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "orderBy", "sortOrder", "limit", "filters","items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "addressId", "firstname", "lastname", "address1", "postcode","city","country_name" |
| Login in BO with default customer | The dashboard page is displayed |
| Go to \'Customers > Addresses\' page | Addresses page is displayed correctly : Page title = Addresses |
| Reset all filters and get the number of addresses | All filters are reset. <br>All Addresses are displayed.<br>Fetch the ID of the first row. |
| Filter each address in the list by the address ID from the jsonResponse | 1 record found.<br><br>Check that the JSON Response has the same data in the BackOffice :<br> * id_address<br> * firstname<br> * lastname<br> * address1<br> * postcode<br> * city<br> * country_name |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
