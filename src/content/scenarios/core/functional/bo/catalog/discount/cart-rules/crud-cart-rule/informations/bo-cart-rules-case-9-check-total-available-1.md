---
title: "BO - Cart rules - Case 9 - Check Total available = 1"
weight: 9
---

# BO - Cart rules - Case 9 - Check Total available = 1
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br>3. Code<br># Conditions:<br>1. Total available = 1<br>2. Total available for each user = 2<br># Actions:<br>1. Discount = 1 euro<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Click on "Proceed to checkout" | The Checkout page is displayed |
| Click on "Sign in" > Set Email & Password of "John DOE":<br><br>Address mail: pub@prestashop.com<br>Password: 123456789<br>Click on Continue | The Addresses step is displayed |
| Click on Continue | The payment step is displayed |
| Check payment method and check  "I agree to the terms of service and will adhere to them unconditionally."  and click on "Place Order" | The Order Confirmation page is displayed |
| Click on "My Store" Link | The Home page is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert is displayed "This voucher has already been used" |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Edit the last cart rule created | The Edit cart rule page is well displayed, check that the total available = 0 |
| Delete the Cart rule | A green alert "Successful deletion." is displayed |
