---
title: "FO - Cart - Display discount on product"
weight: 6
---

# FO - Cart - Display discount on product
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6998

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discount | Cart Rules page displayed |
| Click on "Add new cart rule" | New cart rule creation page displayed |
| Fill the form > Click on Save | Successful creation |
| Click on "Add new cart rule" | New cart rule creation page displayed |
| Fill the form > Click on Save | Successful creation |
| On FO > search "note" > Press Enter | There are 3 products |
| Quick view of Mountain fox notebook > Add to cart | Product successfully added to your shopping cart |
| Click on Continue shopping | Search results page<br><br>There are 3 products |
| Quickview of Brown bear notebook > Add to cart | Modal is displayed<br><br> <br><br>Product successfully added to your shopping cart<br>Product displayed (image, name, price, dimension, quantity)<br><br>Number of item in your cart is displayed<br><br>Subtotal, shipping and total (tax incl.) displayed<br><br>Button "Continue Shopping" and "Proceed to checkout" displayed<br><br>Cross to close the page displayed |
| Click to Proceed to checkout | Shopping cart page displayed<br><br>2 items (Mountain fox notebook and Brown bear notebook)<br><br>- image, name, price, dimension, quantity, total price<br><br>Delete button<br><br>Shipping price displayed<br><br>Total (tax incl.) displayed |
| Click on Promo code > fill the input > Click to Apply | Discount added <br><br>Discount(s) = - €2.32<br><br>Total (tax incl.) = €28.64<br><br>test = -€2.32 |
| Click on Promo code > fill the input > Click to Apply | Discount added <br><br>Discount(s) = - €17.32<br><br>Total (tax incl) = €13.64<br><br>test = -€2.32<br><br>test2 = -€15.00 |
| Delete test2 | Discount(s) = - €2.32<br><br>Total (tax incl.) = €28.64<br><br>test = -€2.32 |
| Delete test | Total (tax incl.) = €30.96 |
| Remove all the products | There are no more items in your cart |
