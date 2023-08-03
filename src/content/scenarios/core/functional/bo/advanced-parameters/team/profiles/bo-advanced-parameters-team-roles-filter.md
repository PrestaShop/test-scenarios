---
title: "BO - Advanced parameters - Team - Roles - Filter"
weight: 1
---

# BO - Advanced parameters - Team - Roles - Filter
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1156

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > Profiles' page | title contains 'Profiles' |
| reset filter | Total of profiles after reset = Total of profiles |
| Filter by id_profile<br>value 4" | Number of profiles < Total of profiles<br>all rows column 'id_profile' contains '4' |
| reset filter | Total of profiles after reset = Total of profiles |
| Filter by name<br>value Logistician" | Number of profiles < Total of profiles<br>all rows column 'name' contains 'Logistician' |
| reset filter | Total of profiles after reset = Total of profiles |
