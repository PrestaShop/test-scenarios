---
title: "PATCH /admin-api/product/{productId}"
weight: 7
---

# PATCH /admin-api/product/{productId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8651
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_product/04_patchProductId.ts

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
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "active" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "active" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "additionalShippingCost" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "additionalShippingCost" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "availableDate" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "availableDate" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "availableForOrder" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "availableForOrder" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productd}" for updating the field "availableLaterLabels" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "availableLaterLabels" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "availableNowLabels" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "availableNowLabels" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "condition" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "condition" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "deliveryTimeInStockNotes" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "deliveryTimeInStockNotes" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "deliveryTimeOutOfStockNotes" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "deliveryTimeOutOfStockNotes" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "deliveryTimeNoteType" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "deliveryTimeNoteType" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "depth" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "depth" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "ean13" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "ean13" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "ecotaxTaxExcluded" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "ecotaxTaxExcluded" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "gtin" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "gtin" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "height" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "height" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "isbn" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "isbn" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "linkRewrites" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "linkRewrites" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "lowStockThreshold" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "lowStockThreshold" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "manufacturerId" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "manufacturerId" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "metaDescriptions" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "metaDescriptions" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "metaTitles" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "metaTitles" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "minimalQuantity" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "minimalQuantity" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "mpn" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "mpn" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "names" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "names" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "onlineOnly" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "onlineOnly" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "onSale" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "onSale" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "priceTaxExcluded" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "priceTaxExcluded" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "redirectOption" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "redirectType" is updated<br>Check that the input value for field "redirectTarget" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "reference" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "reference" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "shortDescriptions" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "shortDescriptions" is updated (in French & English) |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "showCondition" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "showCondition" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "showPrice" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "showPrice" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "taxRulesGroupId" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "taxRulesGroupId" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "unitPriceTaxExcluded" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "unitPriceTaxExcluded" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "unity" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "unity" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "upc" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "upc" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "visibility" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "visibility" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "width" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "width" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "weight" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "weight" is updated |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-dev/index.php/api/product/\{productId}" for updating the field "wholesalePrice" | The HTTP code is 200.<br>The return data has multiples keys.<br>The key active has the updated value. |
| Reload the Edit page | Check that the input value for field "wholesalePrice" is updated |
| Click on the "Go to catalog" | Products Page is displayed correctly.<br><br>1 record found in the table |
| Delete the product by using the “three dots” icon on the right > Click on Delete | A modal is displayed with two buttons:<br>* Cancel<br>* Delete |
| Click on “Delete” button | * “No records found” text is displayed instead of the product list<br>* “Successful deletion” message is displayed<br>* The product is well removed |
| Click on “X Reset” button | * All filters are reset.<br>* All products are displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
