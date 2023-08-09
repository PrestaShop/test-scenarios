---
title: "BO - Catalog - Stocks - simple Filter Stocks"
weight: 1
---

# BO - Catalog - Stocks - simple Filter Stocks
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-838

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog > Stocks | Stock management page is displayed |
| Search by name <br>Criteria : 'Hummingbird printed t-shirt' | number of element in grid after filter < total of element in grid<br>all element in grid column name contains 'Hummingbird printed t-shirt' |
| reset filter | number of element in grid after reset = total of element in grid |
| filter by reference <br>Criteria : demo_1 | number of element in grid after filter < total of element in grid<br>all element in grid column reference contains 'demo_1' |
| reset filter | number of element in grid after reset = total of element in grid |
| filter by supplier <br>Criteria : 'N/A' | number of element in grid after filter < total of element in grid<br>all element in grid column supplier contains 'N/A' |
| reset filter | number of element in grid after reset = total of element in grid |
