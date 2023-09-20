---
title: "BO - Combinations Tab"
weight: 14
---

# BO - Combinations Tab
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5210

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is well displayed |
| Click on *New product* button on the top right of the page > Choose "Product with combinations" block in the modal | * A modal  is displayed with 4 product types :Standard product,Product with combinations,Pack of products,Virtual product<br><br> * A description by type is displayed . For Product with combinations:  "A product with different variations (size, color, etc.) from which customers can choose." |
| Click on *Add new product* button in the modal | * New Product page on "Description" tab is displayed<br> * "Product with combinations" type description is displayed below the product name field<br> * The Combinations tab is well displayed |
| Fill the main fields on "Description" tab > Click on *Save and publish* button | Successful message is displayed : Successful update |
| Go to the "Combinations" tab > Click on "Attributes & Features" link | The page "Attributes " is displayed in another tab |
| Return in BO > Catalog > Products > Edit your latest product created | The page of your product with the description is displayed |
| Go to the "Combinations" tab > Click on "Learn more" button | The page "PrestaShop 1.7 documentation" is displayed in a new tab |
| Click on the "Generate combinations" button | A "Generate combinations" modal is displayed with :<br> * Search for attributes... field<br> * Size<br> * Color<br> * Dimension<br> * Paper Type<br> * Cancel button : enabled<br> * Generate combinations button: disabled |
| Click on "Cancel" button of the modal | The modal is well removed |
| Click on the "Generate combinations" button > Check "Size" and "Color" checkboxes > Click on "Generate XX combinations" button | * All attributes are added on the Search for attributes... field<br> * The button is enabled and named : Generate 56 combinations<br> * "Successfully generated 56 combinations" is displayed |
| In the Combination product list > Edit those data for the first combination<br> * Reference<br> * Impact on price (tax excl.)<br> * Quantity<br><br>and click on "Save list" button | A green alert "Update successful" is displayed<br>The data is well-filled:<br> * Reference<br> * Impact on price (tax excl.)<br> * Impact on price (tax incl.)<br> * Final price (tax excl.)<br> * Quantity |
| Click on the "Edit" action for the second combination | A modal  is displayed |
| Edit the fields in the modal > and click on Save | * The green alert "Update successful" is well displayed<br> * A new line is added below the Stocks:<br> ** "Recent stock movements" is well displayed<br> ** The employee's firstname & lastname are well displayed<br> ** The quantity = 50 is well displayed |
| Click on *Previous combination* button in the modal | The first combination edited in *Step 9* is displayed |
| Click on *Next combination* button in the modal two times | The third combination in well displayed with empty fields |
| Click on *Cancel* button in the modal | * The modal is closed<br> * Manage product combinations page is displayed |
| Go to *When out of stock* section in page botttom > Select *Deny orders* option > Click on *Save* button | The message "Successful update" is displayed |
| Go to FO > Click on the product with combination "my product" > Select Size : L | The *ADD TO CART* button is disabled |
| Back to BO > Combinations > *When out of stock* section > Select *Allow orders* > Click on *Save and publish* button | The message "Successful update" is well displayed |
| Go to FO > Click on the product with combination "my product" > Select Size : L | The *ADD TO CART* button is Enabled |
| Back to *BO > Combinations > When out of stock* section *>* Select *Use default behavior(Deny orders) >* Click on *Save and publish* button | The message "Successful update " is displayed |
| Go to FO > Click on the product with combination "my product" > Select Size : L | The *ADD TO CART* button is Disabled |
| *BO > Combinations > When out of stock* section *>* Click on *Edit default behavior* link | New tab is opened displaying *Product Settings* page |
| Go back to the Combinations of our new product > Go to the page buttom and fill the  field > Click on *Save and publish* button | "Successful update" message is well displayed |
| Go to *FO* > Click on "my product" | * ADD TO CART button is enabled<br> * *Product Available* is displayed just under the button |
| BO > Combinations > When out of stock section > Select *Allow orders* <br><br>Fill the *Label when out of stock (and backorders allowed) :* Product is Unavailable <br><br>Click on *Save and publish* button | The message "Successful update" is well displayed |
| Go to *FO* > Click on "my product" | * ADD TO CART button is enabled<br> * *Product is Unavailable* is displayed just under the button |
