---
title: "BO - Cart rules - Case 12 - Group customer restriction"
weight: 12
---

# BO - Cart rules - Case 12 - Group customer restriction
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br> ## Select Customer Group Selection: <br> ### Unselected groups = Customer<br> ### Selected groups = Visitor + Guests<br> # Actions:<br> ## Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | * "Home" page is well displayed<br> * You are logged in |
| Add product to cart and click on Proceed to checkout | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An alert "You cannot use this voucher" is displayed |
| Click on "Sign out" link on the header | * You are logged out<br> * The product is removed from the cart |
| Add again a product to cart and Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | The discount is well applied and the total is ok |
| Remove discount by clicking on "trash" icon | The discount is well removed |
| Remove product by clicking on "trash" icon | The product is well removed |
