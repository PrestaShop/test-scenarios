---
title: "BO - Cart rules - Condition - Case 5 - Check Total available for each User = 1"
weight: 6
---

# BO - Cart rules - Condition - Case 5 - Check Total available for each User = 1
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2685
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/06_checkTotalAvailableForEachUser.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br>1. Total available =2<br>2. Total available for each user =1<br> # Actions:<br>1. Discount = 1 euro<br><br>and click on Save | An alert "Successful creation." is displayed |
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
| Set the Code and click on Add | An alert is displayed "You cannot use this voucher anymore (usage limit reached)" |
| Click on Sign out | The user is not logged anymore |
| Go to Home page and add a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
