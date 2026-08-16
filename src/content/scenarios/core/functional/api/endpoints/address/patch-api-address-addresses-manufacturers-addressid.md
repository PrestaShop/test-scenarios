---
title: "PATCH /api-address/addresses/manufacturers/{addressId}"
weight: 9
---

# PATCH /api-address/addresses/manufacturers/{addressId}
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8567

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Catalog > Brands & suppliers page | Page title = Brand |
| Reset all filters and get number of addresses | Number of addresses > 0 |
| Create new manufacturer address | Success message is displayed |
| Fetch the ID of the created address in the list as \{addressId} | the addressId > 0 |
| Go to edit address page | page title = Editing brand address |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "firstName" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "firstName" has the updated value. |
| Reload the edit page | Check that the "firstName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "lastName" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "lastName" has the updated value. |
| Reload the edit page | Check that the "lastName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "address" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "address" has the updated value. |
| Reload the edit page | Check that the "address" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "address2" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "address2" has the updated value. |
| Reload the edit page | Check that the "address2" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "city" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "city" has the updated value. |
| Reload the edit page | Check that the "city" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "postCode" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "postCode" has the updated value. |
| Reload the edit page | Check that the "postCode" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "countryId" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "countryId" has the updated value. |
| Reload the edit page | Check that the "countryId" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "homePhone" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "homePhone" has the updated value. |
| Reload the edit page | Check that the "homePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "mobilePhone" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "mobilePhone" has the updated value. |
| Reload the edit page | Check that the "mobilePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "other" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "other" has the updated value. |
| Reload the edit page | Check that the "other" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" for updating the field "dni" where \{addressId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "dni" has the updated value. |
| Reload the edit page | Check that the "dni" is updated<br><br>Check that the other inputs are the same |
| Go back to Brands page | Page title = Brands |
| Filter list by firstName | 1 record is  displayed |
| Delete brand address | Success message is displayed |
| Reset all filters | Number of addresses = number of addresses |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
