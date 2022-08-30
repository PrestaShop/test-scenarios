---
title: "BO - CRUD Product with combinations"
weight: 3
---

# BO - CRUD Product with combinations
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Product with combinations" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A product with different variations (size, color, etc.) from which customers can choose." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Product with combinations" type description is displayed below the product name field |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Go to "Combinations" tab > Click on "Generate combinations" button | A "Generate combinations" modal is displayed |
| Check "Size" and "Color" checkboxes > Click on "Generate XX combinations" button | * All attributes is added on the empty field<br> * "Successfully generated 56 combinations" is displayed |
| Click on "Cancel" button or the close icon of the modal | The modal is well removed |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field shoul be  "15"<br> * The content is added |
| Click on the "Offline" switch button at the bottom of the page (at the left of the "Save button") & Click on the "Save button" | * The switch button is set to "Online" and is green<br> * "Successful update" message is displayed<br> * The "Save" button is changed by "Save and publish" button |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Edit the product by changing every data on each tab above (except combinations) > Click on "Save and publish" button | "Successful update" message is displayed |
| Edit the product by add more combinations data on "Combinations" tab | * "Cancel" / "Reset" / "Save list" buttons are displayed<br> * "Update successful" message is displayed |
| Click on "Save and publish" button > Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * "Successful update" message is displayed<br> * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
