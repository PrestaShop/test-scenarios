---
title: "GET /admin-api/attributes/groups"
weight: 5
---

# GET /admin-api/attributes/groups
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12011
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/02_attributesGroup/06_getAttributesGroups.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request :<br> * Authentifed : Yes<br> * Method:  GET<br> * URL : "https://[url of your shop]/admin-api/attributes/groups" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "sortOrder", "limit", "filters", "items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "attributeGroupId", "name", "position", "values" |
| In BO, Go to Catalog > Attributes & Features page | Catalog > Attributes & Features Page is displayed correctly.<br>Default records found in the table |
| Reset all filters of Attributes table | All filters are reset. <br>All Attributes are displayed. |
| *Loop on each item of the key items of the JSON Response* |  |
| Filter on the attribute group ID column for a specific attribute group | 1 record found.<br><br>Check that the JSON Response has the same data in the grid :<br> * attributeGroupId<br> * name<br> * position<br> * values |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
