---
title: "BO - Catalog - Stocks - Update Quantity by setting input"
weight: 3
---

# BO - Catalog - Stocks - Update Quantity by setting input
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-840

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to catalog Stocks | Title contains 'Stocks *'<br>Number of element in grid > 0 |
| Filter by name<br>Criteria : 'Mountain fox - Vector graphics' | Number of element in grid < Total of elements in grid<br>First row column name = 'Mountain fox - Vector graphics' |
| Add Quantity by setting input value<br>Criteria : 5 | Successful update message is displayed : 'Stock successfully updated'<br>physical and available quantity were updated |
| Subtract Quantity by setting input value<br>Criteria : -5 | Successful update message is displayed : 'Stock successfully updated'<br>physical and available quantity were updated |
| Reset filter | Number of element in grid after reset = Total of elements in grid |
