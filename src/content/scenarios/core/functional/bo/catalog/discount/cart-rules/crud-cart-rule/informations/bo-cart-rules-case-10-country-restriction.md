---
title: "BO - Cart rules - Case 10 - Country restriction"
weight: 11
---

# BO - Cart rules - Case 10 - Country restriction
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Countries page and searched for "United States | The page is well displayed with the exact filter |
| Enable United states country with quick access | An alert "The status has been successfully updated." is displayed |
| Reset Filter | The filter is well reset |
| Go to Catalog > Discounts | The cart rules page is well displayed |
| Click on "Add new cart rule" button | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br>1. Country restriction<br> ## Unselected: France<br> ## Selected: United states<br> # Actions:<br>1. Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An alert is displayed "You must choose a delivery address before applying this voucher to your order" |
| Click on "Proceed to checkout" | * Checkout page is displayed<br> * Personal information step is displayed |
| Click on "Sign in" tab > Fill the form with your logins > Click on "Continue" button | * You are well logged in<br> * Addresses step is displayed |
| Select an address (United States) and click continue | Shipping method step is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | The discount is well applied & the total is ok |
| Remove discount by clicking on "trash" icon | The discount is well removed |
| Click on logo of the shop > Click on "Cart" link on the header | Shopping cart page is displayed |
| Remove product by clicking on "trash" icon | The product is well removed |
