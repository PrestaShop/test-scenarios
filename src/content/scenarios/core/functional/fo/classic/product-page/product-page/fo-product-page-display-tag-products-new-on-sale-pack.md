---
title: "FO - Product Page - Display tag products (New, On sale, Pack...)"
weight: 13
---

# FO - Product Page - Display tag products (New, On sale, Pack...)
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1269

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Pack of product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The description of the product's type change<br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| * Go to "Options" tab<br> * Clic on the switch button under "Web only (not sold in your retail store)" | * The option tab should be displayed<br> * the switch button should be changed into Yes |
| Clic on "Save" | You should be on the product page with the green notification "Successful update" |
| Go to FO | You shop should be displayed |
| * On "popular product", Clic on "All products >"<br> * Clic on "Next >" | * The first page of all your product should be displayed with the faceted search on the left <br> * You should be in the second page of the product<br> * The product "Test" should have the label "New","Pack", "Out-of-stock" and "online only" on it |
| Clic on "Test" product | The product page should be displayed with the three label on the top left of the image and "online only" on the bottom-right |
