---
title: "FO - Product Page - Download attachment"
weight: 6
---

# FO - Product Page - Download attachment
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-6974

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Virtual product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  " An intangible product that doesn't require shipping. You can also add a downloadable file." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Virtual product" type description is displayed below the product name field<br> * The tab "Virtual product" is well displayed |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Click on "Virtual product" tab | The Option "Allow orders" should be selected in the "When out of stock" section |
| Edit quantity of the product | The content is added |
| Clic on the "Add downloadable file" switch | * The switch should be set to "on" <br> * A panel to set up the files appears |
| Setup the download file | The download panel should be completed (except for the date part) |
| Click on Save | * A green alert "Successful update" is displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 100 is well displayed |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field should be "18"<br> * The content is aded |
| Click on the "Offline" switch button at the bottom of the name (at the left of the "Virtual product") & Click on the "Save button" | * The switch button is set to "Online" and is green<br> * A "Successful update" message is displayed<br> * The "Save" button is changed by the "Save and publish" button<br> * Check the header of the product<br> ** The cover image is well displayed<br> ** Price tax excl. = €15.00<br> ** Price tax incl. = €18.00 tax incl. (tax rule: 20%)<br> ** 100 in stock<br> ** Reference: 12345 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Add the product to cart and Process to checkout | You should have two same product on your checkout |
| * Clic on Proceed to checkout <br> * Sign in with the pub@prestashop account <br> * finish the checkout | * That will show you the sign in method <br> * it will redirect to adress<br> * An Order is well created with products |
| Go to Bo > Orders > Orders > Click view on latest Orders | You last order should be Displayed |
| Update Status of the order by Payement accepted | a Message "Succesfull update" should be displayed |
| Go back in the FO > Clic on your account name > Order History and Details | All your order should be displayed |
| Clic details on the latest order | The order that you've just take should be displayed |
| Scroll Down and you can click on "Download" at the bottom of the product name | * Download should be started<br> * An email "The virtual product that you bought is available for download" should be received which contains "Product(s) to download" |
| Go back to browser tab of the BO > Edit the product by changing every data on each tab above > Click on "Save and publish" button | * A "Successful update" message is displayed<br> * Check the header of the product:<br> ** Price tax excl. = €20.00<br> ** Price tax incl. = €22.00 tax incl. (tax rule: 10%)<br> ** 200 in stock<br> ** Reference: 1234567 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
