---
title: "BO - CRUD Product with combinations"
weight: 2
---

# BO - CRUD Product with combinations
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4773
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/03_CRUDProductWithCombinations.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Product with combinations" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A product with different variations (size, color, etc.) from which customers can choose." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Product with combinations" type description is displayed below the product name field<br>* The Combinations tab is well displayed |
| Fill the main informations on "Description" tab | The content is added |
| Go to "Details" tab > Fill the "Reference" field | The content is added |
| Go to the "Combinations" tab > Click on "Attributes & Features" link | The page "Attributes & Features" is displayed in another tab |
| Close the Tab | The product page is displayed |
| Click on the "Generate combinations" button | A "Generate combinations" modal is displayed |
| Check "Size" and "Color" checkboxes > Click on "Generate XX combinations" button | * All attributes is added on the empty field<br> * "Successfully generated 56 combinations" is displayed |
| Click on "Cancel" button or the close icon of the modal | The modal is well removed |
| In the Combination product list > Edit those data for the first combination<br>* Reference<br>* Impact on price (tax excl.)<br>* Quantity<br><br>and click on "Save list" | A green alert "Update successful" is displayed<br>The data is well-filled:<br>* Reference<br>* Impact on price (tax excl.)<br>* Impact on price (tax incl.)<br>* Final price (tax excl.)<br>* Quantity |
| Click on the "Edit" action for the second combination | A modal "Edit combination" is displayed |
| Edit the combination by changing every data in the modal > and click on Save | * The green alert "Update successful" is well displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 100 is well displayed |
| Click on "Cancel" or outside | The modal is closed |
| Change the pagination to 100 | Only 1 page is displayed, the visible text =  "Viewing 1-56 out of 56 (page 1 / 1)" |
| Sort by id_combination desc | table is sorted by id_combination desc (3 -> 2 -> 1) |
| Sort by "Impact on price (tax excl.)" desc | table is sorted by "Impact on price (tax excl.)" desc (3 -> 2 -> 1) |
| Sort by "Impact on price (tax excl.)" asc | table is sorted by "Impact on price (tax excl.)" asc (1 -> 2 -> 3) |
| Sort by "Impact on price (tax incl.)" desc | table is sorted by "Impact on price (tax incl.)" desc (3 -> 2 -> 1) |
| Sort by "Impact on price (tax incl.)" asc | table is sorted by "Impact on price (tax incl.)" asc (1 -> 2 -> 3) |
| Sort by "Quantity" desc | table is sorted by "Quantity" desc (3 -> 2 -> 1) |
| Sort by "Quantity" asc | table is sorted by "Quantity" asc (1 -> 2 -> 3) |
| Sort by id_combination asc | table is sorted by id_combination desc (1 -> 2 -> 3) |
| Change Display items to 50 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Click on the "Delete" icon to remove any combination | A modal "Delete item" is displayed |
| Click on "Cancel" | The modal is closed and the combination is not removed |
| Click on the "Delete" icon to remove any combination | A modal "Delete item" is displayed |
| Click on "Delete" | * A green alert "successful deletion" is displayed<br>* The combination is well removed |
| Click on the Seclect "Size" and try to filter by a Size | * All combinations displayed are filtered by Size<br>* The "Color" expression is changed to "Size(1)"<br>* The button "Clear filter" is well displayed |
| Select All combinations & edit the combinations | A modal "Edit x combinations" is displayed |
| Click on Stocks > Enable those fields:<br>* "Edit quantity" <br>* "Minimum order quantity"<br>* "Stock location" | The data is well filled |
| Click on Retail price > Enable those fields:<br>* Cost price (tax excl.)<br>* Impact on price (tax incl.)<br>* Impact on weight | The data is well filled |
| Click on Specific references > Enable those fields:<br>* Reference | The data is well filled |
| Click on "Apply to XX combinations" | The modal "Edit x combinations" is closed<br>The modal "Editing combinations" is displayed:<br>- 100% is displayed<br>- The close button is displayed |
| Click on Close button | * The modal "Editing combinations" is closed<br>* The quantity for each combination is increased<br>* The Reference for each combination is updated<br>* * The "Impact on price (tax excl.)" for each combination is updated<br>* The bulk action button is disabled |
| Go to "Pricing" tab > Edit "Retail price" section | * "Retail price (tax incl.)"  field shoul be  "18"<br> * The content is added |
| Click on the "Offline" switch button at the bottom of the page (at the left of the "Save button") & Click on the "Save button" | * The switch button is set to "Online" and is green<br> * "Successful update" message is displayed<br> * The "Save" button is changed by "Save and publish" button<br>* Check the header of the product<br> ** The cover image is well displayed<br> ** Price tax excl. = €15.00<br> ** Price tax incl. = €18.00 tax incl. (tax rule: 20%)<br> ** the sum of the quantity in stock of all combinations<br> ** Reference: 12345 |
| Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Edit the product by changing every data on each tab above (except combinations) > Click on "Save and publish" button | * "Successful update" message is displayed<br> * Check the header of the product:<br> ** Price tax excl. = €20.00<br> ** Price tax incl. = €22.00 tax incl. (tax rule: 10%)<br> ** 200 in stock<br> ** Reference: 1234567 |
| Edit the product by add more combinations data on "Combinations" tab | * "Cancel" / "Reset" / "Save list" buttons are displayed<br> * "Update successful" message is displayed |
| Click on "Save and publish" button > Click on "Preview" button at the bottom of the page and check all data is correct on the preview | * "Successful update" message is displayed<br> * New tab is opened to show the product in FO.<br> * Product is displayed correctly.<br> * Data is correct on the preview in FO |
| Go to back to browser tab of the BO > Click on "Delete" button at the bottom of the page | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * Products list page is displayed<br> * "Successful deletion" message is displayed<br> * The product is well removed |
