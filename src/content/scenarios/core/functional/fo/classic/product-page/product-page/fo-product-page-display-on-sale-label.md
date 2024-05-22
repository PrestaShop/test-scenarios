---
title: "FO - Product Page - Display \"On sale\" label"
weight: 13
---

# FO - Product Page - Display \"On sale\" label
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1270
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/02_productPage/13_displayOnSaleLabel.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| * Go to "Pricing" tab<br> * Click  on the checkboxe "Display the "On sale!" flag on the product page, and on product listings" | * You should have your pricing tab displayed<br> * The checkboxe shoudl be checked |
| Clic on "Save" | You should be on the product page with the green notification "Successful update" |
| Go to FO | You shop should be displayed |
| * On "popular product", Clic on "All products >"<br> * Clic on "Next >" | * The first page of all your product should be displayed with the faceted search on the left <br> * You should be in the second page of the product<br> * The product "Test" should have the label "On Sale!","New" and "Out-of-stock" on it |
| Clic on "Test" product | The product page should be displayed with<br> * the label "ON SALE!" that take all the top of the image product <br> * the two other label on top left of the image |
