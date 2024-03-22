---
title: "FO - Product Page - Display Specific delivery time"
weight: 15
---

# FO - Product Page - Display Specific delivery time
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1271

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Product | You should have all your product displayed on the BO |
| * Clic on "Add new product"<br> * Clic on "Add new product" | * A modal should be displayed to choose the correct type of product <br> * The product configuration page should be displayed |
| * Set up the Product name <br> * Clic on the switch next to "Offline" | * Your product name shouldn't be blanck <br> * The switch should set to "Online" |
| * Go to Stocks tab<br> * Add 1 on the quantity <br> * On the "When out of stock" part, clic on "Allow orders" | * The stock tab should be displayed<br> * Under Edit quantity, you should have the number 1 <br> * The radio button of "Allow orders" should be selected |
| * Go on the Shipping tab<br> * On the "Delivery time" clic on "Specific delivery time for this product"<br> * Set the " Delivery time of in-stock products: " and Delivery time of out-of-stock "products with allowed orders: " | * The Shipping tab should be displayed <br> * The radio button of "Specific delivery time for this product" should be selected<br> * The different field shouldn't be empty |
| Clic on "Save" | You should be on the product page with the green notification "Successful update" |
| Go to FO | You shop should be displayed |
| Write "Test" on the search field | You should have your product "Test" showed on the list |
| Clic on "Test" product | The product page should be displayed with on the right : <br> * The name of the product <br> * The price <br> * the mention "Tax included - 3 to 4 day" |
| Clic on the up arrow next to the number of quantity | * The quantity number should be 2 <br> * under the price, you have the mention " Tax included - 6 to 7 day" |
