---
title: "BO - Cart rules - Conditions : Case 9 - Compatibility with other cart rules"
weight: 10
---

# BO - Cart rules - Conditions : Case 9 - Compatibility with other cart rules
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10328
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/10_compatibilityWithOtherCartRules.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Cart rule" page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Go to BO > Catalog > Discounts > Cart rules page | The "Add new cart rule" page is well displayed |
| Set these fields and click on Save | An alert "Successful creation." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields and click on Save | An alert "Successful creation." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields and click on Save | An alert "Successful creation." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields and click on Save | An alert "Successful creation." is displayed |
| Go to FO | FO page displayed |
| Sign in | Logged as John DOE |
| Click to John DOE > Addresses <br><br> <br><br>Update your address in France<br><br> <br><br>Save | Address successfully updated. |
| Add "The best is yet to come framed poster" to cart | h4. Product successfully added to your shopping cart |
| Click to Proceed to checkout | Shopping cart page displayed.<br><br> <br><br>Total = 297€ |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 268€ |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 268€<br><br> <br><br>Free gift added |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 261€<br><br> <br><br>Free shipping added |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 256,50€ |
| Delete Percent cart rule | Total = 285€ |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 256,50€ |
| Go to BO > Catalog > Discounts > Cart rules page<br><br> <br><br>Add | The Cart rules page is well displayed |
| Edit Percent discount<br><br> <br><br>Save | Successful update |
| Go to FO > Cart | Total = 256.50€ |
| Place Order | h3. Your order is confirmed<br><br> <br><br>Total = 256,50 |
| BO > Catalog > Discount > Cart rules | The "Cart rule" page is well displayed |
| Delete the 4 discounts that were created | Successful deletion |
