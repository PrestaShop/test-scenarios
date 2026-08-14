---
title: "POST /admin-api/addresses/manufacturers"
weight: 5
---

# POST /admin-api/addresses/manufacturers
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8566

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/attributes/attributes" with relative data | The HTTP code is 201.<br><br>The return value is in JSON<br><br>The return data has multiples keys :<br> * 'addressId'<br> * 'manufacturerId'<br> * 'lastName'<br> * 'firstName'<br> * 'address'<br> * 'address2'<br> * 'city'<br> * 'postCode'<br> * 'countryId'<br> * 'stateId'<br> * 'homePhone'<br> * 'mobilePhone'<br> * 'other'<br> * 'dni'<br><br>The return value data are consistent relative to sent data. |
| Go to catalog > Brands and suppliers page | check that the page title = Brands |
| Reset all filters and get the number of addresses | Number of addresses > 0 |
| Filter list by firstName | 1 record found |
| Go to edit address page | Page title = Editing brand address<br><br>Check data are consistant with JSON data |
| Go back to Brand page and delete the created brand address | Successful message is displayed |
| Reset all filters | Number of addresses = number of addresses - 1 |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
