---
title: "EditCheckCart"
weight: 1
---

# EditCheckCart
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1344
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/05_cartFO/01_editCheckCart.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO homepage | Home page is displayed correctly |
| Go to the first product page | Product page is displayed correctly |
| Add the product to the cart | Product is correctly added. Number of items in cart is changed |
| Go to the FO homepage | Home page is displayed correctly |
| Go to the second product page | Product page is displayed correctly |
| Add the product to the cart | Product is correctly added. Number of items in cart is changed |
| Check that the first product in cart is correct | Values are correct: - name - price - quantity |
| Check that the second product in cart is correct | Values are correct: - name - price - quantity |
| Change the quantity of the first product to 3 | Quantity is updated. Price is updated |
| Change the quantity of the second product to 2 | Quantity is updated. Price is updated |
| Check total cart value. Check total number of items | Total price is changed. Total number of items is changed |
