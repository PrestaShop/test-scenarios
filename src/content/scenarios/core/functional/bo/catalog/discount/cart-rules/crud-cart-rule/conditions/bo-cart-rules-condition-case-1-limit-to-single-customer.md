---
title: "BO - Cart rules - Condition - Case 1 - Limit to single customer"
weight: 1
---

# BO - Cart rules - Condition - Case 1 - Limit to single customer
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2682
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/01_limitToSingleCustomer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Priority = 2<br> # Conditions:<br> ##  Limit to a single customer = John DOE (pub@prestashop.com)<br> ## Put a Valid date (From : currentDate-1, To : currentdate)<br> # Actions:<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok |
| Click on "View my customer account" | "Your Account" page is displayed |
| Click on "Vouchers" | "Your vouchers" page is displayed and check that:<br><br>The Cart rule is displayed with Value = 1 euro |
| Click on "Sign out" | The page "Log in to your account" is displayed |
| Click on My store and add a product to the cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and no discount is displayed |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page, delete the voucher and confirm the deletion | A green alert "Successful deletion." is displayed |
