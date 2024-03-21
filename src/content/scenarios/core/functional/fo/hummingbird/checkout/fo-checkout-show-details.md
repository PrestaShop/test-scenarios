---
title: "FO - Checkout - Show details"
weight: 1
---

# FO - Checkout - Show details
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5110
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/01_showDetails.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add multiple products to your cart > Proceed to checkout > Proceed to checkout > Click on Show details | The complete list of products present in the cart is displayed<br>For each product must be filled in:<br>- The picture<br>- the name<br>- the quantity<br>- all the selected combinations (color, size...)<br>- the unit price |
| Click on a product image | The product page is displayed<br>Your cart contains 1 of these products. |
| Close the product page | Product page is closed |
| On Checkout page > Click on a product name | The product page is displayed<br>Your cart contains 1 of these products. |
| Close the product page | Product page is closed |
| Click on Show details | The full list of products in the cart is hidden |
