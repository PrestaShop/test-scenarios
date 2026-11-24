---
title: "PATCH /admin-api/addresses/carts/{cartAddressId}"
weight: 6
---

# PATCH /admin-api/addresses/carts/{cartAddressId}
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8562

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Open FO > Add product to cart > proceed to checkout | Cart page is displayed |
| sign in with the created customer | the customer is connected |
| Choose the created address and continue to payment step | Payment step is visible |
| Go to BO > Order > shopping cart page | Shopping cart page is displayed |
| Fetch the ID of the first shopping cart in the list as \{idCart} | the idCart is > 0 |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "firstName" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key firstName has the updated value. |
| Reload the edit page | Check that the "firstName" value is updated<br><br>the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "lastName" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key lastName has the updated value. |
| Reload the edit page | Check thar the "lastName" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "address" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "address" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "address2" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "address2" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "city" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "city" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "postCode" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "postCode" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "countryId" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "countryId" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "countryId" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "countryId" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "homePhone" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "homePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "mobilePhone" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "mobilePhone" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "company" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "company" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "vatNumber" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "vatNumber" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "other" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "other" is updated<br><br>Check that the other inputs are the same |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartId}" for updating the field "dni" where \{cartId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the page | Check that the "dni" is updated<br><br>Check that the other inputs are the same |
| Request with the method DELETE the endpoint "[https://url of your shop/admin-api/addresses/\{addressId}" to delete the created address | The HTTP code is 204. |
| Go to Customers > Customers page and delete the created customer in the Pre-condition | The customer is deleted successfully |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
