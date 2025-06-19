---
title: "BO - Cart rules - Condition - Case 3 - Minimum amount"
weight: 3
---

# BO - Cart rules - Condition - Case 3 - Minimum amount
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2684
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/03_minimumAmount.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br>3. Code<br># Conditions:<br>1. Minimum amount = 50 euro Tax included + shipping excluded<br># Actions :<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed, the promo code section is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | for 1.7.8.x : An alert "You have not reached the minimum amount required to use this voucher" is displayed<br>for 8.0.x : An alert "The minimum amount to benefit from this promo code is €50.00." is displayed |
| Increase the quantity of the product to 2 or 3 (total product > 50) | Product quantity well increased |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is not applied and the total is ok |
| Remove the product | The product is well removed |
