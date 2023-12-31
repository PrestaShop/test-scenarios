---
title: "BO - Catalog - Attributes - Filter table"
weight: 1
---

# BO - Catalog - Attributes - Filter table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-803
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/01_attributes/attributes/01_filterAttributes.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes page | The Attributes page is well displayed |
| Filter by ID | Total attributes < Number attributes and the attributes list contain the searched ID |
| Reset all filters and get number of attributes | Total attributes = Number of Attributes |
| Filter By Name | Total attributes < Number attributes and the attributes list contains the searched Name |
| Reset all filters and get number of attributes | Total attributes = Number of Attributes |
| Filter By Position | Total attributes < Number attributes and the attributes list contains the searched Position |
| Reset all filters and get number of attributes | Total attributes = Number of Attributes |