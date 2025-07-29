---
title: "POST /admin-api/customers/group"
weight: 4
---

# POST /admin-api/customers/group
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10260
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_customerGroup/04_postCustomersGroup.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/customers/group" with relative data | The HTTP code is 201.<br><br>The return value is in JSON<br><br>The return value data are consistent relative to sent data. |
| In BO, Go to Shop Parameters > Customer Settings | Customer Settings Page is displayed correctly. |
| Click on the Groups tab | Customers - Groups page is well displayed |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| Filter by groupe name with the name of the created group | 1 record found |
| Click on Edit for the filtered group | The Edit page will be displayed correctly<br><br>The return data keys are consistent relative to BackOffice data. |
| Click on the Groups tab | Customers - Groups page is well displayed |
| Filter by groupe ID with the ID of the created group | 1 record found |
| Delete the filtered group > Click Yes | Message “Successful deletion” is displayed<br><br>The filtered group is deleted |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
