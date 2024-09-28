---
title: "BO - Advanced parameters - Team - Roles - Filter"
weight: 1
---

# BO - Advanced parameters - Team - Roles - Filter
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1156

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Roles page | title contains 'Role' |
| reset filter | Total of Roles after reset = Total of Roles |
| Filter by id_Role<br>value 4" | Number of Roles < Total of Roles<br>all rows column 'id_role' contains '4' |
| reset filter | Total of Roles after reset = Total of Roles |
| Filter by name<br>value Logistician" | Number of Roles < Total of Roles<br>all rows column 'name' contains 'Logistician' |
| reset filter | Total of Roles after reset = Total of Roles |
