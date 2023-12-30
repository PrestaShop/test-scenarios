---
title: "BO - Catalog - Monitoring - Delete Empty Category"
weight: 1
---

# BO - Catalog - Monitoring - Delete Empty Category
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-799
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/03_monitoring/01_deleteEmptyCategory.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Monitoring page] | Page title contains 'Monitoring' |
| Filter category grid by name of created category | Category created is displayed in top of the grid |
| Reset categories grid in monitoring page | At least 1 category is displayed in grid |
| Filter category grid by name of created category | Category created is displayed in top of the grid |
| Delete "category created" from monitoring page | Redirection to categories page<br>Successful delete message is displayed |
| Reset filter in categories page | Number of categories after reset = total of categories |