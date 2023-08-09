---
title: "BO - Catalog - Stocks - Bulk Edit Quantity with Input"
weight: 4
---

# BO - Catalog - Stocks - Bulk Edit Quantity with Input
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-841

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to catalog Stocks | Title contains 'Stocks *'<br>Number of element in grid > 0 |
| Filter by name<br>Criteria : 'Mountain fox notebook' | Number of element in grid < Total of elements in grid<br>In all rows, column name = 'Mountain fox notebook' |
| Enter 100 in bulk input quantity and click on apply new quantities | Successful message : Stock successfully updated<br>In all rows, updated physical value = physical value + 100<br>In all rows, updated available value = available value + 100 |
| Enter -100 in bulk input quantity and click on apply new quantities | Successful message : Stock successfully updated<br>In all rows, updated physical value = physical value - 100<br>In all rows, updated available value = available value - 100 |
| Reset filters | Number of element in grid > Total of products |
