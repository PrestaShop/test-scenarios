---
title: "BO - Multistore"
weight: 23
---

# BO - Multistore
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters > enable multistore >save | A success message will appear : "Successful update  " |
| Go to advanced Parameters >multistore | multistore page is well displayed |
| Click on add new Store | a page is diplayed with a title : "add new " |
| fill the blanks of the new store | A success message will appear : "Successful creation  " |
| Click on "set a URL for this shop" > set the virtual URL >save | A success message will appear : "Successful update  "<br><br>the new shop page is well displayed . |
| Go to Catalog > Products | the product page of the default shop is"PrestaShop" is displayed |
| Click on the multishop top -- bar | a multishop modal is displayed : <br> * All stores <br> * Group Default : * PrestaShop      * new shop |
| click on the new shop | the products of the new shop are displayed with a top-bar title new shop  . |
| click on "view my store" | the FO of the new shop "newshop " is diplayed |
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
| in the new store  "new shop" , the product page created  > click on "Apply changes to all stores"> save | A success message will appear : "Successful update  " |
| change the shop to "PrestaShop " | the product page of PrestaShop is displayed > see the product created is well displayed in this shop |
