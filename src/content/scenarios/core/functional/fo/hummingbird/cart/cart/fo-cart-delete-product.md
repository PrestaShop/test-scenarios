---
title: "FO - Cart - Delete product"
weight: 2
---

# FO - Cart - Delete product
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-6994

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on button "Add to cart" for product "Hummingbird Printed T-shirt" > Click on Proceed to checkout | Your cart is displayed with the product Hummingbird printed t-shirt |
| Click on the action button Remove | The product is deleted<br>The message "There are no more items in your cart" is displayed in your shopping cart. |
| Go to FO > Click on button "Add to cart" for product "Hummingbird Printed T-shirt" > Click on Proceed to checkout | Your cart is displayed with the product Hummingbird printed t-shirt |
| Click on the minus sign ( - ) next to the product's quantity | The product is deleted<br>The message "There are no more items in your cart" is displayed in your shopping cart. |
| Go to FO > Click on button "Add to cart" for product "Hummingbird Printed T-shirt" > Click on Proceed to checkout | Your cart is displayed with the product Hummingbird printed t-shirt |
| Write 0 in quantity field > Click on the checkmark | The product is deleted<br>The message "There are no more items in your cart" is displayed in your shopping cart. |
