---
title: "GET /admin-api/categories"
weight: 1
---

# GET /admin-api/categories
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12064
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_category/01_getCategories.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request :<br> * Authentifed : Yes<br> * Method:  GET<br> * URL : "https://[url of your shop]/admin-api/categories" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "sortOrder", "limit", "orderBy", "filters", "items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys :<br> * "categoryId"<br> * "enabled"<br> * "name" |
| In BO, Go to Catalog > Categories page | Catalog > Categories Page is displayed correctly.<br>Default records found in the table |
| Reset all filters of Categories table | All filters are reset. <br>All Categories are displayed. |
| Filter by "Displayed" column : "Yes" | All categories are displayed (except Root)<br>The number of categories equals to totalItems (- 1 = Root) |
| *Loop on each item of the key items of the JSON Response* |  |
| Filter on the "Displayed" column : "Yes"<br><br>Filter on the "ID" column : Key "categoryId" | 1 record found.<br><br>Check that the JSON Response has the same data in the grid :<br> * categoryId<br> * name<br> * active |
| Reset all filters | Filters are reset<br>Total attributes = Number of Attributes |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
