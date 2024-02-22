---
title: "FO - Cart - Continue Shopping and Proceed to Checkout"
weight: 7
---

# FO - Cart - Continue Shopping and Proceed to Checkout
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7005

## Steps
| Step Description | Expected result |
| ----- | ----- |
| FO > Click on "The best is yet to come" product | "The best is yet to come" product page displayed |
| Click to "Add to cart" button | Modal is displayed<br><br> <br>h4. Product successfully added to your shopping cart<br><br>Product displayed (image, name, price, dimension, quantity)<br><br>Number of item in your car displayed<br><br>Subtotal, shipping and total (tax incl.) displayed<br><br>Button "Continue Shopping" and "Proceed to checkout" displayed<br><br>cross to close the page displayed |
| Click on Proceed to checkout button | Cart page displayed<br><br>1 item on your cart<br><br>Product displayed (image, name, price, dimension, quantity, total price)<br><br>Delete button<br><br>Shipping price displayed<br><br>Total (tax incl.) displayed |
| Click to "Continue shopping" | Home page displayed |
| Click to cart | Cart displayed |
| Click to "Proceed to checkout" | Checkout page displayed<br><br>1 item<br><br>Subtotal = 34.80€<br><br>Shipping = free<br><br>Total (tax incl.) = 34.80 |
| Click to home page | home page displayed |
| Click to cart | Cart displayed |
| Click to delete button | There are no more items in your cart |
