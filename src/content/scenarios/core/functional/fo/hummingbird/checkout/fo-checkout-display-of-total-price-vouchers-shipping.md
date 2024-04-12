---
title: "FO - Checkout - Display of total (price, vouchers, shipping)"
weight: 2
---

# FO - Checkout - Display of total (price, vouchers, shipping)
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5112
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_displayOfTotals.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Add a new cart rule > Fill in the form with Data > Save | "Successful creation" alert is displayed |
| Go to FO > Add product "Mug The adventure begins" to the cart > Click on Proceed to checkout | The shopping cart page displayed |
| Click on "1234" | Promo code section is displayed with promo code input = 1234 |
| Click on Apply | See the shopping cart is like the following :<br><br>1 item = €14.28<br>Discount(s) = - €5.00<br>Shipping Free<br> <br>Total (tax incl.) = €9.28<br><br>KDO -€5.00 |
| Click on Proceed to checkout > Fill in your step 1 : Personal Information > Fill in your Step 2 : Address > Shipping Method - Step 3 > Choose My carrier | See the shopping cart is like the following :<br><br>1 item = €14.28<br>Discount(s) = - €5.00<br>Shipping = €8.40<br>Total (tax incl.) = €17.68<br><br>KDO -€5.00 |
| Click on the Trash icon to delete the Discount | Discount is deleted<br><br>1 item = €14.28<br>Shipping = €8.40<br>Total (tax incl.) = €22.68 |
| Click on Remove button | There are no more items in your cart |
