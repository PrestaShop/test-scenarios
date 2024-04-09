---
title: "FO - Cart - Modal - Continue shopping"
weight: 2
---

# FO - Cart - Modal - Continue shopping
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1276

## Steps
| Step Description | Expected result |
| ----- | ----- |
| FO > Click on "The best is yet to come" product | "The best is yet to come" product page displayed |
| Click to "Add to cart" button | Modal is displayed<br><br> <br>h4. Product successfully added to your shopping cart<br><br>Product displayed (image, name, price, dimension, quantity)<br><br>Number of item in your car displayed<br><br>Subtotal, shipping and total (tax incl.) displayed<br><br>Button "Continue Shopping" and "Proceed to checkout" displayed<br><br>cross to close the page displayed |
| Click to "Continue shopping" button | the modal closes and  "The best is yet to come" product page displayed |
| Click on Cart button | 2 item on your Cart |
| click on delete button | There are no more items in your cart |
