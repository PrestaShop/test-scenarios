---
title: "CheckProduct"
weight: 2
---

# CheckProduct
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1343
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/04_catalogFO/02_checkProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO homepage | Home page is displayed correctly |
| Go to the first product page | Product page is displayed correctly |
| Check the product page is correct | Product data is correct: - name: 'HUMMINGBIRD PRINTED T-SHIRT' - quantity_wanted: '1' - price: '22.94' - description: 'Symbol of lightness and delicacy' |