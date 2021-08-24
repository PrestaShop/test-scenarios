---
title: "Update Quantity by setting input"
weight: 3
---

# Update Quantity by setting input
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to catalog Stocks | Title contains 'Stocks *'<br>Number of element in grid > 0 |
| Filter by name<br>Criteria : 'Mountain fox - Vector graphics' | Number of element in grid < Total of elements in grid<br>First row column name = 'Mountain fox - Vector graphics' |
| Add Quantity by setting input value<br>Criteria : 5 | Successful update message is displayed : 'Stock successfully updated'<br>physical and available quantity were updated |
| Subtract Quantity by setting input value<br>Criteria : -5 | Successful update message is displayed : 'Stock successfully updated'<br>physical and available quantity were updated |
| Reset filter | Number of element in grid after reset = Total of elements in grid |
