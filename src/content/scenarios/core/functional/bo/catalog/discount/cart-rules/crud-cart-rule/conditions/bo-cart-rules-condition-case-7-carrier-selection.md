---
title: "BO - Cart rules - Condition - Case 7 - Carrier selection"
weight: 9
---

# BO - Cart rules - Condition - Case 7 - Carrier selection
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br> ## Select Carrier selection:<br> ### Unselected carrier: Click and collect<br> ### Selected carriers: My carrier<br> # Actions:<br> ## Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An alert "You must choose a carrier before applying this voucher to your order" is displayed |
| Click on "Proceed to checkout" | * Checkout page is displayed<br> * Personal information step is displayed |
| Click on "Sign in" tab > Fill the form with your logins > Click on "Continue" button | * You are well logged in<br> * Addresses step is displayed |
| Select an address (France) and click on "Continue" button | Shipping method step is displayed |
| Select "Click and collect" carrier on "Continue" button | Payment step is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An error message is displayed "You cannot use this voucher with this carrier" |
| Go back on the "Shipping method" step by clicking on "edit" link > Select "My Carrier" carrier and click on "Continue" button | Payment step is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | The discount is well applied & the total is ok |
| Remove discount by clicking on "trash" icon | The discount is well removed |
| Click on logo of the shop > Click on "Cart" link on the header | Shopping cart page is displayed |
| Remove product by clicking on "trash" icon | The product is well removed |
