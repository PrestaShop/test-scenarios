---
title: "BO - Catalog - Categories - Change position of categories"
weight: 4
---

# BO - Catalog - Categories - Change position of categories
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-794
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/02_categories/04_changeCategoryPosition.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Reset all filters | Number of categories > 0 |
| Sort categories by position | Successful update message is displayed |
| Drag category position 1 (first in table) and drop it in position 2 | Category's position is changed (position = 2) |
| Reset categories position (drag category position 2 and drop it in position 1) | Category's position is changed (position = 1) |
