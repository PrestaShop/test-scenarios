---
title: "FO - Product Page - Display volume discount"
weight: 18
---

# FO - Product Page - Display volume discount
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-6986

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| * Go to Stocks tab<br> * Add 30 on the quantity | * The stock tab should be displayed<br> * Under Edit quantity, you should have the number 30 |
| * Clic on the "Pricing" tab<br> * Set the Retail price (tax incl) to 20 | * The pricing tab should be displayed<br> * The retail price (tex excl.) should be set |
| * Clic on "Add a specific price" <br> * Set the "Minimum number of units purchased"<br> * Enable "Apply a discount to the initial price"<br> * Set to 2 € tax included <br> * Clic on save and publish<br> * Clic On the right of the modal | * A modal "Add new specific price" should be displayed <br> * The number under "Minimum number of units purchased" should be 3 <br> * The set up of this part should be enabled <br> * you should have 2.000 on the number <br> * You should be again on the modal with a green notification " Update successful"<br> * The modal should be close and under Specific price you should have the detail of the new specific price you set up |
| Clic on "Save" | You should be on the product page with the green notification "Successful update" |
| Go to FO | You shop should be displayed |
| Write "Test" on the search field | You should have your product "Test" showed on the list |
| Clic on "Test" product | The product page should be displayed with on the right : <br> * The price should be €20.00<br> * The Volume discount with "Quantity" "3", "Unit discount" "€2.00" and "You Save" "€6.00" |
| Clic on the up arrow twice next to the number of quantity | * The quantity number should be 3<br> * The price striped with a new price in orange under the first one<br> * Next to the second price, you have "Save €2.00" |
