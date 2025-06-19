---
title: "FO - Checkout - Show details"
weight: 1
---

# FO - Checkout - Show details
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1293
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/11_checkout/01_showDetails.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On checkout page<br><br>Click on "show details" | The complete list of products present in the cart must be displayed<br>For each product must be filled in:<br>- The picture<br>- the name<br>- the quantity<br>- all the selected combinations (color, size...)<br>- the unit price |
| Click on a product image | The product page should be opened |
| Click on a product name | A new tab should open on the product page |
| Click on "show details" | The full list of products in the cart should no longer be displayed |
