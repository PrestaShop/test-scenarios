---
title: "GET /admin-api/attributes/attribute/{attributeId}"
weight: 2
---

# GET /admin-api/attributes/attribute/{attributeId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12171
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_attribute/02_getAttributesAttributeId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| Filter on the Attribute Group Name | 1 record found |
| Click on the View button on the first row | The Attributes page is displayed |
| Fetch the ID as \{attributeId} of the first row |  |
| Click on the Edit button on the first row | The Attribute View page is displayed |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/attributes/attribute/\{attributeId}" where \{attributeId} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "attributeGroupId", "attributeId", "color", "names", "shopIds"<br><br>The return data keys are consistent relative to BackOffice data. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
