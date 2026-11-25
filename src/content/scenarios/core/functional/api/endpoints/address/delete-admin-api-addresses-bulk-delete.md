---
title: "DELETE /admin-api/addresses/bulk-delete"
weight: 11
---

# DELETE /admin-api/addresses/bulk-delete
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8560

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Customers > Addresses | Adresses page is displayed correctly with the title = Addresses |
| Reset all filters and get the number of addresses | Nbr of addresses > 0 |
| Go to add new address page | New address page is displayed correctly |
| Create the first address with the first created customer in the Pre-condition | First address is created successfully |
| Filter by firstname and fetch its ID as \{addessId1} | 1 record found |
| Create the second address with the second created customer in the pre-condition | Second address is created successfully |
| Filter by fisrtname of created addresses and fetch its ID as \{addressId2} | 1 record found |
| Reset all filters | Number of addresses = number of adresses + 2 |
| Request :<br> * Authentified : YES<br> * Method : DELETE<br> * URL : "https://[url of your shop]/admin-api/addresses/bulk-delete" | The HTTP Code is 204.<br><br>The return value is in empty. |
| Filter by ID Address with the value: \{addressId1} | 0 record found |
| Reset all filters | Filters are reset<br><br>Total addresses = number of addresses before creation |
| Filter by ID Address with the value: \{addressId2} | 0 record found |
| Reset all filters | Number of addresses = number of addresses before creation |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
