---
title: "BO - Catalog - Stocks - Update Quantity by setting input"
weight: 3
---

# BO - Catalog - Stocks - Update Quantity by setting input
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-840

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Catalog> Stock | page title contains 'Stock' is displayed |
| * Overlapse the field of edit quantity <br> * Clic on the up arrow until you reach 5<br> * Clic on check mark | * Up Arrow/Down Arrow is displayed and a check mark is displayed <br> * You'll have the number 5 on the field <br> * 5 new items have been added on *Physical* and *Available* rows |
| * Overlapse the field of edit quantity <br> * Clic on the down arrow until you reach -3<br> * Clic on check mark | * Up Arrow/Down Arrow is displayed and a check mark is displayed <br> * You'll have the number 5 on the field <br> * 3 items have been deleted on *Physical* and *Available* rows |
| * Go to a product and edit quantity<br> * Clic on check mark | * A check mark is displayed<br> * 7 new items have been added on *Physical* and *Available* rows |
| * Go to a product and edit quantity<br> * Clic on check mark | * A check mark is displayed<br> * 10 items have been deleted on *Physical* and *Available* rows |