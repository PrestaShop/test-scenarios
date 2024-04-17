---
title: "BO - Advanced Parameters - Performance - Optional features"
weight: 3
---

# BO - Advanced Parameters - Performance - Optional features
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1136

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO > Shop Parameters > Customer settings<br> * Clic on the Groups tab | * You should be on the customer settings page on the same named tab <br> * You should be on the Groups tab |
| * Clic on the Edit button next to Guest<br> * Change the Discount field to 5<br> * Clic on Save button | * The customer groups tab should be displayed especially on ther Guest page <br> * The discount field should have 5.00 %<br> * You should be redirected to "Groups" tab with a green notification "Succesful update" |
| Go to FO | You shop should be displayed |
| Clic on the product "the best is yet to come" | The product page "the best is yet to come" should be displayed |
| Scroll down and clic on "Product detail" next to "Description" | You should have the tab "product detail" displayed with "Composition : Matt Paper" |
| * Clic on Sign In button at the header<br> * Set your account <br> * Clic on "Sign in" button | * You should be Redirect to "Log in to your account" tab <br> * Your email and password field should be blank <br> * You should be redirect to the product "the best is yet to come" with a price lower than previously |
| * Go to BO >  Advenced Parameters > Performance <br> * Scroll down to Optional feature | * You should be on the Performance page on the BO<br> * You should see the Optional feature with 3 switch button displyed : <br><br> ** Combination (that can't be disabled because you have combination on your shop) <br> ** Features <br> ** Customer groups |
| Disable the Features switch button and click on save button | You should be redirected to the performance page with the green notification "Update successful" |
| Return to your FO on you product page and refresh it | You should have the "best is yet to come framed poster" product displayed |
| Scroll down and clic on "Product detail" next to "Description" | You should have the tab "product detail" displayed and you don't have the "composition" mentioned |
| Return to your BO > Advanced Parameters > Performance, on the Optional feature part | You still have the three switch button displayed |
| Disable the Customer groups switch button and click on save button | You should be redirected to the performance page with the green notification "Update successful" |
| Return to your FO on you product page and refresh it | You should have the "best is yet to come framed poster" product displayed with a price bigger than previously |
| Go to BO >  Catalog > Products | You should see all the product in your shop on a list |
| * Select with the checkboxes the product with the id : <br>1 - 2 - 3 - 4 - 5 - 9 - 10 - 11 - 16 - 17 - 18<br> * Clic on the "Bulk action" button <br> * Clic on the Delete selection button <br> * Clic on the Delete selection button <br> * Clic on the "Close" button | * There checkboxes should be checked <br> * There are four choice displayed bottom of the bulk action button <br> * A new tab named "Delete selection" is displayed <br> * You should have a load to delete the product <br> * You should be redirected to the product page without the product you selected |
| Return to your BO > Advanced Parameters > Performance, on the Optional feature part | You still have the three switch button displayed |
| Disable the Combination switch button and click on save button | You should be redirected to the performance page with the green notification "Update successful" |
| Go to BO >  Catalog > Products | You should see all the product in your shop on a list |
| Clic on the the "New Product" button | You should have only 3 selection possible : <br> * Standard product <br> * Pack of products <br> * Virtual products<br><br>And the button "Add new product" |
