---
title: "BO - CRUD Pack of products"
weight: 3
---

# BO - CRUD Pack of products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4774
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/04_CRUDPackOfProducts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Pack of products" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Pack of products:  "A collection of products from your catalog." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Pack of products" type description is displayed below the product name field<br> * The Pack tab is well displayed |
| Fill the main informations on "Description" tab | * The content is added |
| Go to "Details" tab > Fill the "Reference" field | * The content is added |
| Go to the "Pack" tab | * The tab "Pack" is well displayed<br> * The title "Pack of products" is well displayed<br> * The Search input "Search combination" is well displayed |
| Search a simple product | * The autocomplete list is displayed with the searched product ( Name and reference)<br> * The search bar in the header keeps the word written |
| Click on the product | The product is well-added:<br> * The image is well displayed<br> * the product's title is well displayed<br> * the expression "Ref: demo_11" is well displayed<br> * The delete icon is well displayed<br> * The input quantity  = 1 is well displayed |
| Search for the same product | "No results found" is displayed |
| Search for a product with combinations | * The autocomplete list is displayed with the 8 combinations ( Name, combination, and reference)<br> * The search bar in the header keeps the word written |
| Select the third combination | The product is well-added:<br> * The image is well displayed<br> * The title of the product "Hummingbird printed t-shirt: Size - M, Color - White" is well displayed<br> * the expression "Ref: demo_1" is well displayed<br> * The delete icon is well displayed<br> * The input quantity  = 1 is well displayed |
| Search for virtual product and click on it | The product is well-added:<br> * The image is well displayed<br> * The title of the product "Mountain fox - Vector graphics" is well displayed<br> * the expression "Ref: demo_18" is well displayed<br> * The delete icon is well displayed<br> * The input quantity  = 1 is well displayed |
| Search for the customized product and click on it | The product is well-added:<br> * The image is well displayed<br> * The title of the product "Customizable mug" is well displayed<br> * the expression "Ref: demo_14" is well displayed<br> * The delete icon is well displayed<br> * The input quantity  = 1 is well displayed |
| Search for the pack product | "No results found" is displayed |
| Change the quantity input of any product with a negative quantity and click on save | A red alert "This value should be greater than or equal to 1." is displayed below the product |
| Change the quantity input of any product with a invalid quantity and click on save | A red alert "This value should be of type numeric. This value should be greater than or equal to 1." is displayed below the product |
| Change the quantity input of any product with a valid quantity and click on save | A green alert "Successful update" is displayed |
| Search for the same product and click on it | The product is well-added:<br> * The image is well displayed<br> * the product's title is well displayed<br> * the expression "Ref: demo_12" is well displayed<br> * The delete icon is well displayed<br> * The input quantity  = 1 is well displayed |
| Click on the delete icon for the product "MUG THE ADVENTURE BEGINS" | A modal is displayed<br> * Modal title = "Delete item"<br> * Modal text = "Are you sure you want to delete this item?"<br> * Two buttons = Cancel & Delete |
| Click on "Cancel" button | The modal is closed & the product is not removed |
| Click on the delete icon for the product "MUG THE ADVENTURE BEGINS" again | A modal is displayed<br> * Modal title = "Delete item"<br> * Modal text = "Are you sure you want to delete this item?"<br> * Two buttons = Cancel & Delete |
| Click on "Delete" button | The modal is closed<br><br>The product "MUG THE ADVENTURE BEGINS" is removed |
| Edit quantity of the pack product | * The content is added |
| Click on Save button | * A green alert "Successful update" is displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 100 is well displayed |
| Go to "Pricing" tab > Edit "Retail price" section | * The content is added |
| Click on the "Offline" switch button at the top of the page (below the product name) & Click on the "Save button" at the bottom of the page | * The switch button is set to "Online" and is green<br> * "Successful update" message is displayed<br> * The "Save" button is changed by "Save and publish" button<br> * Check the header of the product<br> ** The cover image is well displayed<br> ** Price tax excl. = €15.00<br> ** Price tax incl. = €18.00 tax incl. (tax rule: 20%)<br> ** 100 in stock<br> ** Reference: 12345 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Edit the product by changing every data on each tab above > Click on "Save and publish" button | * A "Successful update" message is displayed<br> * Check the header of the product:<br> ** Price tax excl. = €20.00<br> ** Price tax incl. = €22.00 tax incl. (tax rule: 10%)<br> ** 200 in stock<br> ** Reference: 1234567 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
