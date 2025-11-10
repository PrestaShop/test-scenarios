---
title: "PATCH /attributes/group/{attributeGroupId}"
weight: 6
---

# PATCH /attributes/group/{attributeGroupId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11953

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
| Click on the Edit button on the first row | The Edit page is displayed |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/attributes/group/\{attributeGroupId}" for updating the field "type" where \{attributeGroupId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the Edit page | Check that the input value for field "type" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/attributes/group/\{attributeGroupId}" for updating the field "names" where \{attributeGroupId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the Edit page | Check that the input value for field "names" is updated in French and English |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/attributes/group/\{attributeGroupId}" for updating the field "publicNames" where \{attributeGroupId} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the Edit page | Check that the input value for field "publicNames" is updated in French and English |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>One record is found in the table (and the filter is enabled) |
| Delete the selected Attribute Group > Confirm the deletion | The alert "Successful deletion." is displayed |
| Filter by groupe name with the name of the created group | 0 record found |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
