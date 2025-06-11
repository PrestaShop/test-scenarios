---
title: "POST /admin-api/product/image/{imageId}"
weight: 2
---

# POST /admin-api/product/image/{imageId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9033
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_product/08_postProductImageId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Reset all filters of Products table | All filters are reset. <br>All Products are displayed. |
| Filter on the product name for a specific product and fetch the product ID. | 1 record found. |
| Click on the Edit icon button | The Product Edit Page is displayed |
| Add one image to product > Select one product > Use as cover image > Add a caption in French & in English > Save image settings & Fetch the image ID | Alert Settings updated is displayed |
| Request with method POST the endpoint "https://[url of your shop]/admin-api/product/image/\{imageId} " where \{imageId} is the imageId ID get | The HTTP Code is 201.<br><br>The return value is in JSON.<br><br>The return data has multiples keys : "imageId", "imageUrl", "thumbnailUrl", "legends", "cover", "position", "shopIds" |
| Reload the Edit Product page | The Edit page will be displayed correctly<br><br>There is one image<br><br>The return data keys are consistent relative to BackOffice data. |
| Click on the three points on the bottom page and Click on Delete | A modal with title "Permanently delete this product?" appeared |
| Click on "Delete" button | A successful message "Successful deletion" is displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
