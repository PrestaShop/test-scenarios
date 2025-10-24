---
title: "DELETE /admin-api/attributes/attribute/{attributeId}"
weight: 1
---

# DELETE /admin-api/attributes/attribute/{attributeId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12116
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_attribute/01_deleteAttributesAttributeId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| Filter with the attribute Group with data<br>Click on the "Search" button | Filter is enabled<br><br>One record is found |
| Click on the View Button on the first row | The attribute page is displayed |
| Click on "Add new value" button | The Add new value page is displayed |
| Set the fields > Click on "Save" | The attribute value is well created and a green alert "Successful creation" is displayed |
| Filter by name of the created attribute value & Fetch its ID as \{attributeId} | 1 record found |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/attributes/attribute/\{attributeId}" | The HTTP code is 204. |
| Filter by attribute value ID with the ID of the created attribute value | 0 record found |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
