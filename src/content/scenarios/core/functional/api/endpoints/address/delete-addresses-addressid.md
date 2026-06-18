---
title: "DELETE /addresses/{addressId}"
weight: 11
---

# DELETE /addresses/{addressId}
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 9.1.x, 9.2.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12899

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Go to Customers > Addresses page | Addreses page is displayed correctly<br><br>Page title = Addresses |
| Filter the list by the created address and get the id of address as \{addressId} | 1 record is found<br>addressId > 0 |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/addresses/\{addressId}" | The HTTP code is 204. |
| Filter by address Id | 0 record found |
| Reset all filters | Filters are reset<br><br>Total addresses = Number of addresses |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
