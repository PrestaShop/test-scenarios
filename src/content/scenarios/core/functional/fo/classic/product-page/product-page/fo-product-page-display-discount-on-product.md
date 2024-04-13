---
title: "FO - Product Page - Display discount on product"
weight: 10
---

# FO - Product Page - Display discount on product
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1268

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| * Clic on the "Pricing" tab<br> * Set the Retail price (tax incl) to 20 | * The pricing tab should be displayed<br> * The retail price (tex excl.) should be set |
| * Clic on "Add a specific price" <br> * Enable "Apply a discount to the initial price"<br> * Set to 2 € tax included <br> * Clic on save and publish<br> * Clic On the right of the modal | * A modal "Add new specific price" should be displayed <br> * The set up of this part should be enabled <br> * you should have 2.000 on the number <br> * You should be again on the modal with a green notification " Update successful"<br> * The modal should be close and under Specific price you should have the detail of the new specific price you set up |
| Clic on Save | You should be on the product page with the green notification "Successful update" |
| Go to FO | You shop should be displayed |
| * On "popular product", Clic on "All products >"<br> * Clic on "Next >" | * The first page of all your product should be displayed with the faceted search on the left <br> * You should be in the second page of the product<br> * The product "Test" should have the label "-€2.00", "New", "Out-of-stock" on it |
| Clic on "Test" product | The product page should be displayed with<br> * the three label on the image<br> * The price striped with a new price in orange under the first one<br> * Next to the second price, you have "Save €2.00" |
