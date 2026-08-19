---
title: "PATCH /admin-api/addresses/customers/{addressId}"
weight: 3
---

# PATCH /admin-api/addresses/customers/{addressId}
## Details
* **Status** : À faire
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8564

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Customers > Addresses page | Addresses page is displayed successfully<br><br>Page title = Addresses |
| Fetch the ID of the created address in the list as \{addressId} | the addressId > 0 |
| Go to to edit address page | page title = edit address |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "addressAlias" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key addressAlias has the updated value. |
| Reload the edit page | Check that the "addressAlias" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "firstName" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key firstName has the updated value. |
| Reload the edit page | Check that the "firstName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "lastName" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key lastName has the updated value. |
| Reload the edit page | Check that the "lastName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "address" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key address has the updated value. |
| Reload the edit page | Check that the "address" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "address2" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key address2 has the updated value. |
| Reload the edit page | Check that the "address2" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "city" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key city has the updated value. |
| Reload the edit page | Check that the "city" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "postCode" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "postCode" has the updated value. |
| Reload the edit page | Check that the "postCode" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "phone" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "phone" has the updated value. |
| Reload the edit page | Check that the "phone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "mobilePhone" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "mobilePhone" has the updated value. |
| Reload the edit page | Check that the "mobilePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "company" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "company" has the updated value. |
| Reload the edit page | Check that the "company" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "vatNumber" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "vatNumber" has the updated value. |
| Reload the edit page | Check that the "vatNumber" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "other" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "other" has the updated value. |
| Reload the edit page | Check that the "other" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/customers/\{addressId}" for updating the field "dni" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "dni" has the updated value. |
| Reload the edit page | Check that the "dni" is updated<br><br>Check that the other inputs are the same |
| Request with the method DELETE the endpoint "[https://url of your shop/admin-api/addresses/\{addressId}" to delete the created address | The HTTP code is 204. |
| Go to customers > customers page and delete the created customer | A success message is displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
