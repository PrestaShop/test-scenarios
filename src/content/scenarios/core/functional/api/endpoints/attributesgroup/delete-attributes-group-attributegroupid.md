---
title: "DELETE /attributes/group/{attributeGroupId}"
weight: 1
---

# DELETE /attributes/group/{attributeGroupId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11794
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_customerGroup/01_deleteCustomerGroupsId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| Click on "Add new Attribute" button | The Add new attribute page is displayed |
| Set the fields > Click on "Save" | The attribute is well created and a green alert "Successful creation" is displayed |
| Filter by name of the created attribute & Fetch its ID as \{attributeGroupId} | 1 record found |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/attributes/group/\{attributeGroupId}" | The HTTP code is 204. |
| Filter by groupe name with the name of the created group | 0 record found |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
