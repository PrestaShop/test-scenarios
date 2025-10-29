---
title: "POST /admin-api/attributes/attribute"
weight: 3
---

# POST /admin-api/attributes/attribute
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12166
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_attribute/04_postAttributesAttribute.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/attributes/group" with relative data | The HTTP code is 201.<br><br>The return value is in JSON<br><br>The return value data are consistent relative to sent data. |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| Filter by name with "Paper Type" | 1 record found |
| Click on the View button on the first row | The Attribute "Paper Type" page will be displayed correctly<br><br>5 (4 defaults values + 1 created) records founds |
| Filter by name with created attribute value name | 1 record found |
| Click on the Edit button on the first row | The Editing Attribute Value page will be displayed correctly<br><br>Check data are consistant with JSON data |
| Click on the "Cancel" page | Catalog > Attributes & Features Page is displayed correctly.<br>1 record is found in the table (and the filter is enabled) |
| Click on the Delete button on the first row > Confirm the deletion | The alert "Successful deletion." is displayed<br><br>0 record found |
| Reset all filters | Filters are reset<br>Total attributes value = 4 (default values) |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
