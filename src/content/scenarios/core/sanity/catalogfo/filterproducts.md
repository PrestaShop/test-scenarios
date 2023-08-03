---
title: "FilterProducts"
weight: 1
---

# FilterProducts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1342
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/04_catalogFO/01_filterProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO homepage | Home page is displayed correctly |
| Click on the All products" link. Save number of products in a variable" | All products are displayed correctly |
| Navigate to the Accessories" category" | All Accessories" products are displayed correctly. There is less products than in the main page" |
| Navigate to the subcategory Stationery" | All Stationery" products are displayed correctly. There is less products than in the main page" |
