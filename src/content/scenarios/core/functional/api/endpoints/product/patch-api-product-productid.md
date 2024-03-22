---
title: "PATCH /api/product/{productId}"
weight: 4
---

# PATCH /api/product/{productId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8651
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/05_product/04_patchAPIProductId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Filter the table on the product name with the name of the product created in precond | 1 record found in the table |
| Fetch the ID of the product on the filtered row | The ID is greather than 0 |
| Click on the edit row on the filtered row | Edit Product Page is displayed correctly |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "type" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
| Reload the Edit page | Check that the input value for field "type" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "active" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "active" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "names" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key names has the updated value. |
| Reload the Edit page | Check that the input value for field "name" (in english & french) is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "descriptions" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key descriptions has the updated value. |
| Reload the Edit page | Check that the input value for field "description" (in english & french) is updated |
| Click on the "Go to catalog" | Products Page is displayed correctly.<br><br>1 record found in the table |
| Delete the product by using the “three dots” icon on the right > Click on Delete | A modal is displayed with two buttons:<br>* Cancel<br>* Delete |
| Click on “Delete” button | * “No records found” text is displayed instead of the product list<br>* “Successful deletion” message is displayed<br>* The product is well removed |
| Click on “X Reset” button | * All filters are reset.<br>* All products are displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
