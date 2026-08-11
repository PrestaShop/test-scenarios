---
title: "GET /admin-api/addresses/manufacturers/{addressId}"
weight: 3
---

# GET /admin-api/addresses/manufacturers/{addressId}
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8565

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to catalog > Brands & suppliers page | Page title = Brands |
| Reset all filters and get the number of addresses | Number of addresses > 0 |
| Go to add new address page | page title = New brand address |
| Create new address | Successful message is displayed |
| Filter list by firstname and get the idAddress | 1 record found<br><br>idAddress > 0 |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/addresses/manufacturers/\{addressId}" where \{addressId} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : <br> *  'addressId'<br> * 'manufacturerId'<br> * 'lastName'<br> * 'firstName'<br> * 'address'<br> * 'address2'<br> * 'city'<br> * 'postCode'<br> * 'countryId'<br> * 'stateId'<br> * 'homePhone'<br> * 'mobilePhone'<br> * 'other'<br> * 'dni'<br><br>The return data keys are consistent relative to BackOffice data. |
| Delete the address | Check the success message |
| Reset filter | Number of addresses = number of addresses |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
