---
title: "BO - Catalog - Stocks - Bulk Edit Quantity with Input"
weight: 4
---

# BO - Catalog - Stocks - Bulk Edit Quantity with Input
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to catalog Stocks | Title contains 'Stocks *'<br>Number of element in grid > 0 |
| Filter by name<br>Criteria : 'Mountain fox notebook' | Number of element in grid < Total of elements in grid<br>In all rows, column name = 'Mountain fox notebook' |
| Enter 100 in bulk input quantity and click on apply new quantities | Successful message : Stock successfully updated<br>In all rows, updated physical value = physical value + 100<br>In all rows, updated available value = available value + 100 |
| Enter -100 in bulk input quantity and click on apply new quantities | Successful message : Stock successfully updated<br>In all rows, updated physical value = physical value - 100<br>In all rows, updated available value = available value - 100 |
| Reset filters | Number of element in grid > Total of products |
