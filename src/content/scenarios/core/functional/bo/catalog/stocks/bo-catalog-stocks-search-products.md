---
title: "BO - Catalog - Stocks - search products"
weight: 1
---

# BO - Catalog - Stocks - search products
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-838

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Stocks | Stock management page is displayed |
| In the search bar, search for : "mug" | See 5 products are displayed |
| Remove "mug" > In the search bar, search for : "demo_20" | See 1 product is displayed |
| Remove "demo_20" > In the search bar, search for : "1234567890" | No product matches your search. Try changing search terms. |
| Go to BO > Catalog > Products > Edit a product > Go to Details tab > Add a GTIN (EAN, JA, ITF or UCC code) : "1234567890123" > Save and publish | Successful update |
| Go to BO > Catalog > Stocks | Stock management page is displayed |
| In the search bar, search for : "1234567890123" | See 1 product is displayed |
| Remove "1234567890123" > In the search bar search for : "fashion" | See 21 products are displayed |
| Remove filter "fashion" | number of element in grid after reset = total of element in grid |
