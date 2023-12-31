---
title: "BO - Cart Rules - CRUD"
weight: 1
---

# BO - Cart Rules - CRUD
## Details
* **Component** : Core
* **Status** : Blocked
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-830

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The Cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case1: Without Code*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Actions:<br> ## Discount = 20%<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well aplied<br><br>Total is ok |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case2: With Code and Highlight disabled*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Code<br> # Actions:<br> ## Discount = 20%<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Edit the last cart rule created | The Edit cart rule page is well displayed |
| *Case3: With Code and Highlight enabled*<br><br>Enable Highlight and save | A green alert "Successful update." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed, the promo code section is displayed, the cart rule name + code are displayed |
| Click on the "Code" | The Promo code value is not empty |
| Click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | **A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case4: Partial Use Enabled*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Actions:<br> ## Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok = *0* |
| Click on "Proceed to checkout" | The Checkout page is displayed |
| Click on "Sign in" > Set Email & Password of "John DOE":<br> * Address mail: [pub@prestashop.com|mailto:pub@prestashop.com]<br> * Password: 123456789<br><br>Click on Continue | The Addresses step is displayed |
| Click on Continue | The Shipping method Step is displayed |
| Click on Continue | The payment step is displayed |
| Check "I agree to the terms of service and will adhere to them unconditionally."  and click on "Place Order" | The Order History is displayed |
| Click on Your account link | "Your Account" page is displayed |
| Click on "Vouchers" | "Your vouchers" page is displayed and check that:<br><br>The second Cart rule is created with Value = 100 (old discount amount) - Total of last order |
| Go back to the BO > Cart rules page | The cart rules page is well displayed and the number of cart rules = Total cart rules + 1 |
| Filter by Code | Number of cart rules < Total Cart rule and the list contains the searched Voucher |
| Click on "Edit" | The Edit cart rule page is well displayed |
| Click on Conditions Tab | Check that *Limit to a single customer = John DOE (pub@prestashop.com)* |
| Click on Actions | Check that *Amount discount = 100 - Total of the last Order* |
| Go Back to BO > Cart rules page, select all discounts, delete with bulk action and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case5: Partial use disabled*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Partial use disabled<br> # Actions:<br> ## Discount = 100<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| **Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok = *0* |
| Click on "Proceed to checkout" | The Checkout page is displayed and the Addresses step is selected |
| Click on Continue | The Shipping method Step is displayed |
| Click on Continue | The payment step is displayed |
| Check "I agree to the terms of service and will adhere to them unconditionally."  and click on "Place Order" | The Order History is displayed |
| Click on Your account link | "Your Account" page is displayed |
| Click on "Vouchers" | "Your vouchers" page is displayed and check that there is no second cart rule created |
| Go back to the BO > Cart rules page | The cart rules page is well displayed and the number of cart rules = Total cart rules |
| Delete the cart rule and confirm the deleteion | A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case 6: Priority*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Priority = 2<br> # Actions:<br> ## Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Priority = 1<br> # Actions:<br> ## Discount = 2 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | Check that Cart rule n°2 (with priority 1)  is applied *before* Cart rule n°1 (with priority 2) , Total is OK |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rules with bulk action and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case7: Status Disabled*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Status = disabled<br> # Actions:<br> ## Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and there is no discount displayed |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case8: Limit to single customer*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Conditions:<br> ## Limit to a single customer = John DOE (pub@prestashop.com)<br> # Actions :<br> ## Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok |
| Click on "View my customer account" | "Your Account" page is displayed |
| "Your vouchers" page is displayed and check that:<br><br>The Cart rule is displayed with Value = 1 euro |  |
| Click on "Sign out" | The page "Log in to your account" is displayed |
| Click on My store and add a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and no discount is displayed |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page, delete the voucher and confirm the deletion | **A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case9: Invalid time*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Conditions:<br> ## Set the "From" & "To" to an expired date<br> # Actions :<br> ## Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is not applied |
| Go back to the BO > Cart rules page, delete the voucher and confirm the deletion | **A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case10: Total Order < Minimum amount*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Code<br> # Conditions:<br> ## Minimum amount = 50 euro Tax included + shipping excluded<br> # Actions :<br> ## Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed, the promo code section is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert "You have not reached the minimum amount required to use this voucher" is displayed |
| Increase the quantity of the product to 2 or 3 (total product > 50) | Product quantity well increased |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case11: Check Total available for each User = 1*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Code<br> # Conditions:<br> ## Total available =2<br> ## Total available for each user =1<br> # Actions:<br> ## Discount = 1 euro<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Click on "Proceed to checkout" | The Checkout page is displayed |
| Click on "Sign in" > Set Email & Password of "John DOE":<br> * Address mail: [pub@prestashop.com|mailto:pub@prestashop.com]<br> * Password: 123456789<br><br>Click on Continue | The Addresses step is displayed |
| Click on Continue | The payment step is displayed |
| Check payment method and check  "I agree to the terms of service and will adhere to them unconditionally."  and click on "Place Order" | The Order Confirmation page is displayed |
| Click on "My Store" Link | The Home page is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert is displayed "You cannot use this voucher anymore (usage limit reached)" |
| Click on Sign out | The user s not logged anymore |
| Go to Home page and a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case12: Check Total available = 1*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Code<br> # Conditions:<br> ## Total available = 1<br> ## Total available for each user = 2<br> # Actions:<br> ## Discount = 1 euro<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Click on "Proceed to checkout" | The Checkout page is displayed |
| Click on "Sign in" > Set Email & Password of "John DOE":<br> * Address mail: [pub@prestashop.com|mailto:pub@prestashop.com]<br> * Password: 123456789<br><br>Click on Continue | The Addresses step is displayed |
| Click on Continue | The payment step is displayed |
| Check payment method and check  "I agree to the terms of service and will adhere to them unconditionally."  and click on "Place Order" | The Order Confirmation page is displayed |
| Click on "My Store" Link | The Home page is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert is displayed "This voucher has already been used" |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Edit the last cart rule created | The Edit cart rule page is well displayed, check that the total available = 0 |
| Delete the Cart rule | **A green alert "Successful deletion." is displayed |
| Go to BO > International > LOcations > Countries page and searched for "United States | The page is well displayed with the exact filter |
| Enable United states country with quick access | An alert "The status has been successfully updated." is displayed |
| Reset Filter | The filter is well reset |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case12: Country restriction*<br><br>Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> ## Code<br> # Conditions:<br> ## Countries restriction (France unselected + United states selected<br> # Actions:<br> ## Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert is displayed "You cannot use this voucher in your country of delivery" |
| Click on "Proceed to checkout" | The Checkout page is displayed, The Addresses step is displayed |
| Select My Address (United States) and click continue | The shipping method is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is well removed |
| Remove the product | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Edit Cart rule | The cart rule page is well displayed |
| *Case13: Carrier restriction*<br><br> <br><br>In the Conditions Tab:<br> # Unselect Countries<br> # Select Carrier: PrestaShop unselected carrier + My carrier selected carriers<br><br>and click on Save | An alert "Successful update." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert "You must choose a carrier before applying this voucher to your order" is displayed |
| Click on "Proceed to checkout" | The Checkout page is displayed, The Addresses step is displayed |
| Select Mon Address (France) and click continue | The shipping method is displayed |
| Select My Carrier and click Continue | The payment method is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the product | Product well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Edit Cart rule | The cart rule page is well displayed |
| *Case14: Group customer restriction*<br><br> <br><br>In the Conditions Tab:<br> # Unselect Carriers<br> # Select Customer Group Selection: Unselected groups = Customer + Selected groups = Vistors + Guests<br><br>and click on Save | An alert "Successful update." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart and click on Proceed to checkout | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert "You cannot use this voucher" is displayed |
| Click on "Sign out" | The customer is not logged any more |
| Click My Store | Home Page is well displayed |
| Add product to cart and Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied and the total is ok |
| Remove discount | The discount is well removed |
| Remove product | The product is well removed |
| Remove the discount | The discount is well removed |