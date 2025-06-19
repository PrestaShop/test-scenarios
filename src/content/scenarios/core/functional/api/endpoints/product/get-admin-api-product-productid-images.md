---
title: "GET /admin-api/product/{productId}/images"
weight: 4
---

# GET /admin-api/product/{productId}/images
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8981
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_product/06_getProductIdImages.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/product/\{productId}/images " where \{productId} is the ID of a product | The HTTP Code is 200.<br><br>The return value is in JSON.<br><br>The return data is an array of an object with multiples keys : "imageId", "imageUrl", "thumbnailUrl", "legends", "cover", "position" |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Reset all filters of Products table | All filters are reset. <br>All Products are displayed. |
| Filter on the product name for a specific product and fetch the product ID. | 1 record found. |
| Click on Edit for the first row | The Edit page will be displayed correctly<br><br>There is the same number of images that in the array.<br><br>The return data keys are consistent relative to BackOffice data. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
