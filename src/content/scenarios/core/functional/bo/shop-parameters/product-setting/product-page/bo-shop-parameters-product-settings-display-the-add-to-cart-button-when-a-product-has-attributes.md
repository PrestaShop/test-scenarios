---
title: "BO - Shop Parameters - Product Settings - Display the \"add to cart\" button when a product has attributes"
weight: 4
---

# BO - Shop Parameters - Product Settings - Display the \"add to cart\" button when a product has attributes
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1072

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Theme & Logo > Add new theme > Install hummingbird > Save > Use the theme hummingbird | Message Successful update is displayed |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Product page | "Display the "Add to cart" button when a product has attributes" is set to YES |
| View my store > Go to category Clothes > Add to cart Hummingbird printed sweater | Product is well added to the cart |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Product page > Disable "Display the "Add to cart" button when a product has attributes" option | Message Update successful is displayed |
| View my store > Add to cart Hummingbird printed sweater | Button Add to cart is not displayed |
| Go to homepage > Add the same product to cart | Product successfully added to your shopping cart |
