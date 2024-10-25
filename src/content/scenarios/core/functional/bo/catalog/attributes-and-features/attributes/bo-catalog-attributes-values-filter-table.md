---
title: "BO - Catalog - Attributes - Values - Filter table"
weight: 6
---

# BO - Catalog - Attributes - Values - Filter table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1776
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/01_attributes/values/01_filterValues.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/attributes-and-features/attributes/edit-add-new-attribute-value

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Attributes page | The Attributes page is displayed |
| Click "View" the first attribute: Size | Page title  = Size & the Values page is well displayed |
| Reset Filter | Number values = Total values |
| Filter by ID | Number values < Total values and the list contains the search ID |
| Reset Filter | Number values = Total values |
| Filter by Name | Number values < Total values and the list contains the search Name |
| Reset Filter | Number values = Total values |
