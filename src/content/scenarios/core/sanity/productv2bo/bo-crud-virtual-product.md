---
title: " BO - CRUD Virtual product"
weight: 8
---

#  BO - CRUD Virtual product
## Details
* **Component** : Core
* **Status** : [TEST] Automation in review
* **Scenario** : https://forge.prestashop.com/browse/TEST-4634

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Virtual product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  " An intangible product that doesn't require shipping. You can also add a downloadable file." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Virtual product" type description is displayed below the product name field |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Go to "Virtual product" tab > Edit quantity of the product | The content is added |
| Click on the "Add downloadable file" switch | * The switch should be set to "on" <br> * A panel to set up the files appears |
| Setup the download file | The download panel is completed |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field should be "15"<br> * The content is aded |
| Click on the "Offline" switch button on the header > Click on Save | * The switch button is set to "Online" and is green<br> * "Successful update" message is displayed<br> * The "Save" button is changed by "Save and publish" button |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Add the product to cart > Proceed to checkout | A new Order is created |
| Go to BO > Orders > Orders > Click view on the latest Order | You last Order should be displayed |
| Update Status of the Order by Payment accepted | Message "Successfull update" should be displayed |
| Go back to the FO > Click on your account name > Order History and Details | All your orders should be displayed |
| Click Details on the latest order | The order that you've just made should be displayed |
| Scroll down to the Product section of the order > Click on "Download" at the bottom of the product name | Download should be started |
| Go back to browser tab of the BO > Edit the product by changing every data on each tab above > Click on "Save and publish" button | "Successful update" message is displayed |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
