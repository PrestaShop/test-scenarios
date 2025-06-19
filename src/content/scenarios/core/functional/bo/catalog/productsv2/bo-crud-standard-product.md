---
title: "BO - CRUD Standard product"
weight: 1
---

# BO - CRUD Standard product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4772
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/02_CRUDStandardProduct.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Go to "Stock" tab > Edit quantity of the product | The content is added |
| Click on Save button | * A green alert "Successful update" is displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 100 is well displayed |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field should be "15"<br> * The content is aded |
| Click on the "Offline" switch button at the bottom of the page (at the left of the "Save button") & Click on the "Save button" | * The switch button is set to "Online" and is green<br> * "Successful update" message is displayed<br> * The "Save" button is changed by "Save and publish" button<br>* Check the header of the product<br> ** The cover image is well displayed<br> ** Price tax excl. = €15.00<br> ** Price tax incl. = €18.00 tax incl. (tax rule: 20%)<br> ** 100 in stock<br> ** Reference: 12345 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Edit the product by changing every data on each tab above > Click on "Save and publish" button | * A "Successful update" message is displayed<br> * Check the header of the product:<br> ** Price tax excl. = €20.00<br> ** Price tax incl. = €22.00 tax incl. (tax rule: 10%)<br> ** 200 in stock<br> ** Reference: 1234567 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
