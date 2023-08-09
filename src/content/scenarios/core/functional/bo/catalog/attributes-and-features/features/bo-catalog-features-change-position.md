---
title: "BO - Catalog - Features - Change position"
weight: 5
---

# BO - Catalog - Features - Change position
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-813

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Features | The Features page is well displayed |
| Sort by Position asc | The list is well sorted by position (1 -> 2 -> 3) |
| Drag & drop the first Feature from the first position to the second position | The alert "Successful update" is displayed, the position of features are updated |
| Reset the position (Drag & drop the first feature to the first position) | The positions are updated and a green alert "Successful update" is displayed |
