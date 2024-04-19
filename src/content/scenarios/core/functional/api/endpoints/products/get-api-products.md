---
title: "GET /api/products"
weight: 1
---

# GET /api/products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8684
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/09_productList/01_getAPIProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/products" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "orderBy", "sortOrder", "limit", "filters", "items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "productId", "active", "name", "quantity", "price", "category" |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Reset all filters of Products table | All filters are reset. <br>All Products are displayed. |
| *Loop on each item of the key items of the JSON Response* |  |
| Filter on the product ID for a specific product | 1 record found.<br><br>Check that the JSON Response has the same data in the BackOffice :<br> * productId<br> * active<br> * name<br> * quantity<br> * price<br> * category |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
