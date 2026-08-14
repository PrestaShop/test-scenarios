---
title: "PATCH /admin-api/addresses/orders/{orderId}"
weight: 4
---

# PATCH /admin-api/addresses/orders/{orderId}
## Details
* **Status** : À faire
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8568

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Orders > Orders page | Orders page is displayed correctly<br><br>Page title = Orders |
| Filter the orders table by the customer name | 1 record is found |
| Fetch the ID of the order in the list as \{orderId} | orderId > 0 |
| Go to Customers > Addresses page | Addresses page is displayed correctly<br><br>page title = Addresses |
| Filter list by created address | 1 record is found |
| go to the edit address page | Page title = Editing address |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "addressAlias" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "addressAlias" has the updated value. |
| Reload the edit page | Check that the "firstName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "firstName" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "firstName" has the updated value. |
| Reload the edit page | Check that the "firstName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "lastName" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "lastName" has the updated value. |
| Reload the edit page | Check that the "lastName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "address" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "address" has the updated value. |
| Reload the edit page | Check that the "address" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "address2" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "address2" has the updated value. |
| Reload the edit page | Check that the "address2" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "city" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "city" has the updated value. |
| Reload the edit page | Check that the "city" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "postCode" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "postCode" has the updated value. |
| Reload the edit page | Check that the "address2" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "countryId" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "postCode" has the updated value. |
| Reload the edit page | Check that the "countryId" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "homePhone" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "homePhone" has the updated value. |
| Reload the edit page | Check that the "homePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "mobilePhone" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "mobilePhone" has the updated value. |
| Reload the edit page | Check that the "mobilePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "company" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "company" has the updated value. |
| Reload the edit page | Check that the "company" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "vatNumber" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "vatNumber" has the updated value. |
| Reload the edit page | Check that the "vatNumber" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "other" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "other" has the updated value. |
| Reload the edit page | Check that the "other" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/orders/\{idOrder}" for updating the field "dni" where \{idOrder} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key "dni" has the updated value. |
| Reload the edit page | Check that the "dni" is updated<br><br>Check that the other inputs are the same |
| Request with the method DELETE the endpoint "[https://url of your shop/admin-api/addresses/\{addressId}" to delete the created address | The HTTP code is 204. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
