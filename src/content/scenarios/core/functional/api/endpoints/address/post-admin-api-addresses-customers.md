---
title: "POST /admin-api/addresses/customers"
weight: 4
---

# POST /admin-api/addresses/customers
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8561

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/attributes/attributes" with relative data | The HTTP code is 201.<br><br>The return value is in JSON<br><br>The return data has multiples keys :<br> * 'addressId'<br> * 'customerId'<br> * 'addressAlias'<br> * 'firstName'<br> * 'lastName'<br> * 'address'<br> * 'address2'<br> * 'city'<br> * 'postCode'<br> * 'countryId<br> * 'dni'<br> * 'company'<br> * 'vatNumber'<br> * 'stateId'<br> * 'homePhone'<br> * 'mobilePhone'<br> * 'other'<br><br>The return value data are consistent relative to sent data. |
| Go to Customers> Addresses page | Addresses page is displayed correctly<br><br>page title = Addresses |
| Reset all filters and get the number of addresses | filters are reset and the number of addresses > 0 |
| Filter list by firstName | The number of elements = 1 |
| Go to edit address page | Edit address page is displayed successfly<br><br>Page title = Editing address<br><br> <br><br>Check data are consistant with JSON data |
| Request with the method DELETE the endpoint "[https://url of your shop|https://[url] of your shop]/admin-api/addresses/\{addressId}" to delete the created address | The HTTP code is 204. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
