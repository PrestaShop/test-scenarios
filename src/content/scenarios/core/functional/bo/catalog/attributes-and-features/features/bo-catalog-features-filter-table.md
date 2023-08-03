---
title: "BO - Catalog - Features - Filter table"
weight: 1
---

# BO - Catalog - Features - Filter table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-809
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/02_features/features/01_filterFeatures.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Features page | The Features page is well displayed |
| Reset all Filters | Number Features = Total Features |
| Filter by ID | Number Features < Total Features and the list contains the searched ID |
| Reset all Filters | Number Features = Total Features |
| Filter by Name | Number Features < Total Features and the list contains the searched Name |
| Reset all Filters | Number Features = Total Features |
| Filter by Position | Number Features < Total Features and the list contains the searched Position |
| Reset all Filters | Number Features = Total Features |
