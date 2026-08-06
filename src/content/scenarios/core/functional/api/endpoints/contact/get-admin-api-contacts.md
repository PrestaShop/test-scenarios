---
title: "GET /admin-api/contacts"
weight: 1
---

# GET /admin-api/contacts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8574
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/contacts/03_getContacts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/contacts" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "orderBy", "sortOrder", "limit", "filters","items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "contactId", "description", "email", "name" |
| Login in BO with default customer | The dashboard page is displayed |
| Go to 'Shop parameters > Contact' page | Contact page is displayed correctly |
| Reset all filters and get the number of addresses | All filters are reset. <br>All contacts are displayed.<br>Fetch the ID of the first row. |
| Filter each contact in the list by the contact ID from the jsonResponse | 1 record found.<br><br>Check that the JSON Response has the same data in the BackOffice :<br> * contactId<br> * description<br> * email<br> * name |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
