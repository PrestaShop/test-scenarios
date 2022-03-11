---
title: "Add a product to the cart"
weight: 6
---

# Add a product to the cart
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click Add new order > Search for an existing customer like John Doe and Choose it | Customer John Doe is chosen |
| Search for a product that doesn't exist | an alert is displayed {color:#FF0000}No products found{color} |
| Search for standard simple product and click Add to cart | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Search the same product and click on "Add" | Cart block is refreshed:<br><br>The quantity is updated = 2<br><br>The price is updated |
| Search for a standard product with combinations and click on Add product | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Search for virtual product and click on Add product | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Search for pack product and click on Add product | An alert is displayed {color:#FF0000}You must add a minimum quantity of 2{color} |
| Increase the quantity = minimum quantity and click on "Add product" | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Search for the customized product (demo_14) and click on Add product | An alert {color:#FF0000}Please fill in all the required fields. {color:#172b4d}is displayed{color}{color} |
| Type the text of your customized product and click on "Add product" | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok<br> # Customization => ok |
| Search for an out of stock allowed product and click on "Add product" | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Search for an out of stock not allowed product and click on Add a product | An alert {color:#de350b}There are not enough products in stock. {color}{color:#172b4d}is displayed{color} |
| Increase the quantity | The quantity cannot be increased |
| Search for a product with a specific price and click on Add a product | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok |
| Increase the quantity | # The quantity is ok<br> # The base price => ok<br> # The price => ok |
| Search for a product with ecotax and click on Add a product | The product is well added to the cart, check that<br> # Image => ok<br> # Reference => ok<br> # Base price => ok<br> # Quantity => ok<br> # Price => ok (PS: we have this issue: [https://github.com/PrestaShop/PrestaShop/issues/9855]) |
| Search a product with a cart rule and add it to the cart ( related to pre-condition https://forge.prestashop.com/browse/TEST-2389) | In the Product block check that:<br><br>Two products are well added<br><br>About the gift product, check:<br> # A product is well added<br> # Base price === Gift<br> # Price === Gift<br><br>In the Vouchers block, check that a cart rule line is well displayed and check that<br> # Name => ok<br> # Description => ok<br> # Value === price of the product tax excluded + amount tax excluded<br><br>In the Summary Block, check that:<br><br>Total vouchers (Tax excl.) === 0<br>Total (Tax excl.) === Total Products tax excluded |
| Change quantity of product | Price should evolve according to quantity of product |
| Click on Remove | Product should be deleted |
| Select another currency | The currency is changed<br><br>The price of all products are updated |
| Select another lanaguge | The language is changed<br><br>The Description of the products is updated |
