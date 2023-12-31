---
title: "BO - Cart rules - Condition - Case 2 - Invalid Date Time"
weight: 3
---

# BO - Cart rules - Condition - Case 2 - Invalid Date Time
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2683
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/02_invalidDateTime.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br># Conditions:<br>1. Set the "From" & "To" to an expired date<br># Actions :<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is not applied |
| Go back to the BO > Cart rules page, delete the voucher and confirm the deletion | A green alert "Successful deletion." is displayed |
