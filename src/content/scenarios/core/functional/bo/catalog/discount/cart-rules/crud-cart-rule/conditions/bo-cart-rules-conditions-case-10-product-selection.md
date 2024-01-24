---
title: "BO - Cart rules - Conditions - Case 10 - Product selection"
weight: 1
---

# BO - Cart rules - Conditions - Case 10 - Product selection
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3705
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/01_cartRules/01_CRUDCartRule/02_conditions/10_productSelection.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/discounts/edit-or-add-cart-rule

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The Cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Conditions <br> ## Put a Valid date (From : currentDate-1, To : currentdate) <br> ## Check Product Selection <br> #  Actions:<br> ## Discount = 20%<br> ## Apply a discount to Order (without shipping) <br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product "Mountain fox notebook" to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Add two other product | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied for all the product <br><br>Total is ok |
| Remove a product from the Shopping cart page except Mountain fox notebook | The product is well removed and the discount is still there |
| Remove the product " Mountain fox notebook"  from the Shopping cart | The product is well removed and the discount has disappeared |
| Remove the last product from the Shopping cart | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
