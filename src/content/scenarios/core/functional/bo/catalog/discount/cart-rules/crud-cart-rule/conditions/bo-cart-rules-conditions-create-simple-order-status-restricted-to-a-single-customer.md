---
title: "BO - Cart rules - Conditions - Create simple order status restricted to a single customer"
weight: 2
---

# BO - Cart rules - Conditions - Create simple order status restricted to a single customer
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The Cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Conditions <br> ## Set a "limit to a single customer"<br> ## Put a Valid date (From : currentDate-1, To : currentdate)<br> #  Actions:<br> ## Discount = 20%<br> ## Apply a discount to Order (without shipping) <br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Create a new customer | The Product page is well displayed |
| Add a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is not applied for the product <br><br>Total is ok |
| Click on Sign out and go to the main product page | The product page is well  displayed |
| Sign in with the customer<br><br>login : [pub@prestashop.com|mailto:pub@prestashop.com]<br><br>password : 123456789 | The product page is well displayed |
| Add a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is applied to the product <br><br>Total is ok |
| Remove the product from the Shopping cart | The product is well removed |
| Clic on Sign out and go to the main product page | The product page is well  displayed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
