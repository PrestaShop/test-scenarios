---
title: "DELETE /admin-api/categories/{categoryId}/{deleteMode}"
weight: 3
---

# DELETE /admin-api/categories/{categoryId}/{deleteMode}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12123
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_category/05_deleteCategoriesIdDeleteMode.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| *Repeat 3 times Step 5 to 13* |  |
| In BO, Go to Catalog > Categories page | Categories Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total categories = Number of Categories |
| Click on "Add new Categories" button | The "New category" page is displayed |
| Fill the fields > Click on "Save" | The category is well created and a green alert "Successful creation" is displayed |
| Filter by name of the created category & Fetch its ID as \{categoryId} | 1 record found |
| In BO, Go to Catalog > Products page | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by name of the first created product | 1 record found |
| Click on the first row of Products grid | Edit Product Page is displayed correctly. |
| Add the new created category<br>Remove the category "Home"<br>Save product | A green alert "Successful update" is displayed.<br><br>Listed categories are only the new created category.<br><br>The default category is the new created category. |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/categories/\{categoryId}/associate_and_disable" | The HTTP code is 204. |
| Filter by category name with the name of the created category | 0 record found |
| In BO, Go to Catalog > Products page<br>Reset filter | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by name of the first created product | 1 record found |
| Click on the first row of Products grid | Edit Product Page is displayed correctly.<br><br>The product status is disabled<br><br>The product category is Home. |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/categories/\{categoryId}/associate_only" | The HTTP code is 204. |
| In BO, Go to Catalog > Products page | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by category name with the name of the created category | 0 record found |
| In BO, Go to Catalog > Products page<br>Reset filter | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by name of the first created product | 1 record found |
| Click on the first row of Products grid | Edit Product Page is displayed correctly.<br><br> <br><br>The product status is enabled<br><br>The product category is Home. |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/categories/\{categoryId}/remove_associated" | The HTTP code is 204. |
| In BO, Go to Catalog > Products page<br>Reset filter | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by category name with the name of the created category | 0 record found |
| In BO, Go to Catalog > Products page | Products Page is displayed correctly.<br>Default records found in the table |
| Filter by name of the first created product | 0 record found |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the name on "Description" tab and the "Reference" on "Details" tab > Click on the "Save button" at the bottom of the page | "Successful update" message is displayed |
| Clic on "< Go to catalog " button at the bottom-left | Products list page is displayed correctly |
| Filter with reference > Click on "Search" button | Only one product is displayed |
| Delete the product by using the "three dots" icon on the right > Click on Delete | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * "No records found" text is displayed instead of the product list<br> * "Successful deletion" message is displayed<br> * The product is well removed |
| Click on "X Reset" button | * All filters are reset.<br> * All products are displayed. |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the name on "Description" tab and the "Reference" on "Details" tab > Click on the "Save button" at the bottom of the page | "Successful update" message is displayed |
| Clic on "< Go to catalog " button at the bottom-left | Products list page is displayed correctly |
| Filter with reference > Click on "Search" button | Only one product is displayed |
| Delete the product by using the "three dots" icon on the right > Click on Delete | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * "No records found" text is displayed instead of the product list<br> * "Successful deletion" message is displayed<br> * The product is well removed |
| Click on "X Reset" button | * All filters are reset.<br> * All products are displayed. |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
