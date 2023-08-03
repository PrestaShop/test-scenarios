---
title: "BO - Cart rules - Condition - Case 6 - Country selection"
weight: 7
---

# BO - Cart rules - Condition - Case 6 - Country selection
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2687
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/10_countryRestriction.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Countries page and searched any country | The page is well displayed with the exact filter |
| Enable any country which are not activated (with red cross) with quick access | An alert "The status has been successfully updated." is displayed |
| Reset Filter | The filter is well reset |
| Go to Catalog > Discounts | The cart rules page is well displayed |
| Click on "Add new cart rule" button | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br>1. Country restriction<br> ## Unselected: France<br> ## Selected: the country you choose<br> # Actions:<br>1. Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | An alert is displayed "You must choose a delivery address before applying this voucher to your order" |
| Click on "Proceed to checkout" | * Checkout page is displayed<br> * Personal information step is displayed |
| Click on "Sign in" tab > Fill the form with your logins > Click on "Continue" button | * You are well logged in<br> * Addresses step is displayed |
| Select an address with the country you choose and click continue | Shipping method step is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on "Add" button | The discount is well applied & the total is ok |
| Remove discount by clicking on "trash" icon | The discount is well removed |
| Click on logo of the shop > Click on "Cart" link on the header | Shopping cart page is displayed |
| Remove product by clicking on "trash" icon | The product is well removed |
