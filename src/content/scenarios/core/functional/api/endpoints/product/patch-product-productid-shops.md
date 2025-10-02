---
title: "PATCH /product/{productId}/shops"
weight: 5
---

# PATCH /product/{productId}/shops
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11163
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/07_product/05_patchProductIdShops.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & experimental features | New & experimental features Page is displayed correctly. |
| Enable the experimental feature "Admin API - Multistore" <br>Click on "Save"<br>Click on "Enable" in the modal | The message "Update successful" is displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Reset all filters of Products table | All filters are reset. <br>All Products are displayed. |
| Filter on the product name for a specific product and fetch the product ID. | 1 record found.<br><br>The product is only available on the first shop |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/product/\{productId}/shops?shopId=\{shopId} " where \{productId} is the ID of a product and \{shopId} is the current shop | The HTTP Code is 200.<br><br>The return value is in JSON.<br><br>The return data has a key productId & shopIds |
| Reload the page | The filter is active<br><br>1 record found.<br><br>The product is available on the first & second shop |
| In BO, Go to Advanced Parameters > Multistore | Multistore Page is displayed correctly. |
| Remove the created shop | 1 shop remaining |
| In BO, Go to Advanced Parameters > New & experimental features | New & experimental features Page is displayed correctly. |
| Disable the experimental feature "Admin API - Multistore" <br>Click on "Save" | The message "Update successful" is displayed. |
| In BO, Go to Shop Parameters > General | Shop Preferences Page is displayed correctly. |
| Disable the multistore<br>Click on "Save" | The message "Update successful" is displayed. |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Delete the created product | The created product is deleted |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
