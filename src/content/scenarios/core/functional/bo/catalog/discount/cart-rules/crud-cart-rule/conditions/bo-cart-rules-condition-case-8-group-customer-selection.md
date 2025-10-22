---
title: "BO - Cart rules - Condition - Case 8 - Group customer selection"
weight: 9
---

# BO - Cart rules - Condition - Case 8 - Group customer selection
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2689
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/08_customerGroupSelection.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

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
