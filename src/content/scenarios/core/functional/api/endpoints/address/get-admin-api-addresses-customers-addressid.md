---
title: "GET /admin-api/addresses/customers/{addressId}"
weight: 7
---

# GET /admin-api/addresses/customers/{addressId}
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8563

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Customers> Addresses page | Addresses page is displayed successfully |
| Reset all filters and get the number of addresses | Number of addresses is > 0 |
| Go to create new address page and create address for the created customer | number of addresses = number of addresses +1 |
| Filter list of addresses by firstName and get the addressId | 1 record found |
| Request with method GET the endpoint "https://[url of your shop]/admin-api//addresses/customers/\{addressId}" where \{addressId} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : <br> * 'addressId'<br> * 'customerId'<br> * 'addressAlias'<br> * 'firstName'<br> * 'lastName'<br> * 'address'<br> * 'address2',<br> * 'city'<br> * 'postCode'<br> * 'countryId'<br> * 'dni'<br> * 'company'<br> * 'vatNumber'<br> * 'stateId'<br> * 'homePhone'<br> * 'mobilePhone'<br> * 'other'<br><br>The return data keys are consistent relative to BackOffice data. |
| Delete the created address | Check the success message |
| Go to Customers page and delete the created customer in the precondition | Check the success message |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
