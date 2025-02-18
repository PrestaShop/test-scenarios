---
title: "BO - Catalog - Categories - Change position of categories"
weight: 4
---

# BO - Catalog - Categories - Change position of categories
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-794

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Reset all filters | Number of categories > 0 |
| Sort categories by position | Categorie is sort by position |
| Drag category position 1 (first in table) and drop it in position 2 | Category's position is changed (position = 2) |
| Reset categories position (drag category position 2 and drop it in position 1) | Category's position is changed (position = 1) |
| Check on FO | Category's position is changed (position = 2) |
