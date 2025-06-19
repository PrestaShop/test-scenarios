---
title: "BO - Cart rules - Information - Case 4 -  Disable status"
weight: 4
---

# BO - Cart rules - Information - Case 4 -  Disable status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2681
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/01_information/04_disableStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Status = disabled<br> # Conditions:<br> ## Put a Valid date (From : currentDate-1, To : currentdate)<br> # Actions:<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and there is no discount displayed |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
