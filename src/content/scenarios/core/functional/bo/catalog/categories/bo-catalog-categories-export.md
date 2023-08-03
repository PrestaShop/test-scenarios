---
title: "BO - Catalog - Categories - Export"
weight: 8
---

# BO - Catalog - Categories - Export
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-798
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/02_categories/07_exportCategories.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > "Categories" page | Categories listing is displayed correctly |
| Export categories to csv file | The file is downloaded successfully<br>Data is correct |
