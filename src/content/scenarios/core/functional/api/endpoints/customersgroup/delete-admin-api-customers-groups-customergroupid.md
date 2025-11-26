---
title: "DELETE /admin-api/customers/groups/{customerGroupId}"
weight: 1
---

# DELETE /admin-api/customers/groups/{customerGroupId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8610
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_customerGroup/01_deleteCustomersGroupsId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Shop Parameters > Customer Settings | Customer Settings Page is displayed correctly. |
| Click on the Groups tab | Customers - Groups page is well displayed |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| Click “Add new group” | The “Add new” page should be displayed correctly |
| Create a new Customer group > Save | Message “Successful creation” is displayed<br><br>There is one more group in the list. |
| Filter by groupe name with the name of the created group | 1 record found |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/customers/groups/\{customerGroupId}" | The HTTP code is 204. |
| Filter by groupe name with the name of the created group | 0 record found |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
