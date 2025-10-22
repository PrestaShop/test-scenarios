---
title: "BO - Cart rules - Condition - Case 4 - Check Total available"
weight: 5
---

# BO - Cart rules - Condition - Case 4 - Check Total available
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2686
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/04_checkTotalAvailable.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br>3. Code<br># Conditions:<br>1. Total available = 1<br>2. Total available for each user = 2<br># Actions:<br>1. Discount = 1 euro<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | The discount is well applied & the total is ok |
| Click on "Proceed to checkout" | The Checkout page is displayed |
| Click on "Sign in" tab > Fill the form with your logins > Click on "Continue" button | * You are well logged in<br> * Addresses step is displayed |
| Select an address and click on "Continue" button | Shipping method step is displayed |
| Click on Continue | Payment step is displayed |
| Check payment method and check "I agree to the terms of service and will adhere to them unconditionally." and click on "Place Order" button | The Order Confirmation page is displayed |
| Click on the logo of the shop | The Home page is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An alert is displayed "This voucher has already been used" |
| Go back to BO > Catalog > Discounts > Cart rules page | The Cart rule page is well displayed |
| Edit the last cart rule created | * The Edit cart rule page is well displayed<br> * Check that the total available = 0 on "Conditions" tab |
| Click on "Cancel" button > Click on the list on the last cart rule created > Choose "Delete" > Click on "Yes" button on the modal | A green alert "Successful deletion." is displayed |
