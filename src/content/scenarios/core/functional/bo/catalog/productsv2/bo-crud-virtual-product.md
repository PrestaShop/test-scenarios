---
title: "BO - CRUD Virtual product"
weight: 4
---

# BO - CRUD Virtual product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4778
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/05_CRUDVirtualProduct.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "Add new product" button on the top right of the page > Choose "Virtual product" block in the modal | * A modal "Add new product" is displayed<br>* A description by type is displayed. For Standard product:  "An intangible product that doesn't require shipping. You can also add a downloadable file." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Virtual product" type description is displayed below the product name field<br> * The tab "Virtual product" is well displayed |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Click on "Virtual product" tab | In "When out of stock" section, the Option "Allow orders" is be selected |
| Edit quantity of the product | The content is added |
| Click on the "Add downloadable file" switch | * The switch should be set to "on" <br> * A panel to set up the files appears |
| Setup the download file | The download panel displays the information |
| Click on Save | * A green alert "Successful update" is displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 100 is well displayed<br> * Add downloadable file section displays the new added file |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field is "18"<br> * The content is added |
| Click on the "Offline" switch button > Click on the "Save button" | * The switch button is set to "Online" and is green<br> * A "Successful update" message is displayed<br> * The "Save" button is changed by the "Save and publish" button<br> * Check the header of the product<br> ** The cover image is well displayed<br> ** Price tax excl. = €15.00<br> ** Price tax incl. = €18.00 tax incl. (tax rule: 20%)<br> ** 100 in stock<br> ** Reference: 12345 |
| Click on 3-dot button > "Preview" | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Add the product to cart and Process to checkout | There are two of the same products in your cart |
| Click on Proceed to checkout > Sign in with the pub@prestashop.com account > Proceed to checkout | YOUR ORDER IS CONFIRMED |
| Go to BO > Orders > Orders > Click view on the latest Order | Your last order is displayed |
| Update Status of the order by Payment accepted | Message "Successful update" is displayed |
| Go back in the FO > Click on your account name > Order History and Details | All your orders are displayed |
| Click details on the latest order | The order that you've just made is displayed |
| Scroll Down to the product list > Click on "Download" below the product name | An email "The virtual product that you bought is available for download" should be received which contains "Product(s) to download"<br><br>https://github.com/PrestaShop/PrestaShop/issues/34935 |
| Go back to browser tab of the BO > Edit the product by changing every data on each tab above > Click on "Save and publish" button | * A "Successful update" message is displayed<br> * Check the header of the product:<br> ** Price tax excl. = €20.00<br> ** Price tax incl. = €22.00 tax incl. (tax rule: 10%)<br> ** 198 in stock<br> ** Reference: 1234567 |
| Click 3-dot button on footer > Click on "Preview" | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click 3-dots button on footer > Click on "Delete" | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
