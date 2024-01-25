---
title: "FO - Cart - Delete product"
weight: 2
---

# FO - Cart - Delete product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1280
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/10_cart/02_cart/02_deleteProduct.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/front-office/customers-shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to FO <br> * Clic "Hummingbird Printed T-shirt"<br> * Clic on "Add to cart"<br> * Clic on Proceed to checkout | * You should see you shop<br> * You'll see the page of your product<br> * You'll have a modal named "Product successfully added to your shopping cart"<br> * Your cart is displayed |
| Clic on the down arrow next to the product's number | * You should have 0 on your product on your card during 1 second <br> * You should have the message "There are no more items in your cart" in your shopping cart. |
| * Go to FO <br> * Clic "Hummingbird Printed T-shirt"<br> * Clic on "Add to cart"<br> * Clic on Proceed to checkout | * You should see you shop<br> * You'll see the page of your product<br> * You'll have a modal named "Product successfully added to your shopping cart"<br> * Your cart is displayed |
| Clic on the dustbin next to the product's price | You should have the message "There are no more items in your cart" in your shopping cart. |
