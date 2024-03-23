---
title: "FO - Order confirmation - List of ordered products"
weight: 1
---

# FO - Order confirmation - List of ordered products
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7007

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add multiple products to your cart > Proceed to checkout | The Shopping cart page is displayed |
| For the product The adventure begins Framed poster > Click on the "+" sign | Quantity is now 2 |
| For the product Mug The adventure begins > Click twice of the "+" sign | Quantity is now 3 |
| Click on "Proceed to checkout" > Click on Sign in | You are redirected to the Addresses step |
| Click on "Continue to Shipping" > Click on "Continue to Payment" > Check Pay by bankwire > Check agree to terms and services > Place Order | Your order is confirmed |
| Scroll to block Order details | See the following info : <br><br>- Order reference<br>- Payment method<br>- Shipping method<br><br>- Hummingbird printed sweater (Size: S) x1<br>- The adventure begins Framed poster (Dimension: 40x60cm) x2<br>- Mug The adventure begins x3<br><br>- Subtotal<br>- Shipping and handling<br>- Total (tax incl.) |
