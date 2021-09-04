---
title: "Add a product to the cart"
weight: 5
---

# Add a product to the cart
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click Add new order > Search for an existing customer like John Doe and Choose it | Customer John Doe is chosen |
| Search for a product that doesn't exist | an alert is displayed {color:#FF0000}No products found{color} |
| Search for standard simple product and click Add to cart | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok |
| Search the same product and click on "Add" | Cart block is refreshed:<br><br>The quantity is updated = 2<br><br>The price is updated |
| Search for a standard product with combinations and click on Add product | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok |
| Search for virtual product and click on Add product | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok |
| Search for pack product and click on Add product | An alert is displayed {color:#FF0000}You must add a minimum quantity of 2{color} |
| Increase the quantity = minimum quantity and click on "Add product" | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok |
| Search for the customized product (demo_14) and click on Add product | An alert {color:#FF0000}Please fill in all the required fields. {color:#172b4d}is displayed{color}{color} |
| Type the text of your customized product and click on "Add product" | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok<br><br>Customization => ok |
| Search for an out of stock allowed product and click on "Add product" | The product is well added to the cart, check that<br><br>Image => ok<br><br>Reference => ok<br><br>Base price => ok<br><br>Quantity => ok<br><br>Price => ok |
| Search for an out of stock not allowed product and click on Add a product | An alert {color:#de350b}There are not enough products in stock. {color}{color:#172b4d}is displayed{color} |
| Increase the quantity | The quantity cannot be increased |
| Add products to cart | Products are all added to the cart |
| Change quantity of product | Price should evolve according to quantity of product |
| Click on Remove | Product should be deleted |
