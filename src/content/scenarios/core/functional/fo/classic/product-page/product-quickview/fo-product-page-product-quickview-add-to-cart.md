---
title: "FO - Product Page - Product Quickview - Add to cart"
weight: 1
---

# FO - Product Page - Product Quickview - Add to cart
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1248
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/01_quickView/01_addToCart.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO, in quickview of a non custom product > Click on "Add to cart" | You will see :<br> * "Product successfully added to your shopping cart" message<br> * Recap in popup of your cart (number of item, subtotal, shipping, Total(tax incl.) |
| Click on Proceed To Checkout | Shopping cart is displayed<br><br>Recap of your cart (number of item, subtotal, shipping, Total(tax incl.) |
| Go to "CUSTOMIZABLE MUG" > Click on quickview > Click on "Add to cart" | "Add to cart" button should be greyed<br><br>You can't click on "Add to cart"<br><br>The mouse pointer must be different on this button (crossed-out circle logo) |