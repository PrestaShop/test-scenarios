---
title: "BO - Catalog - Features - Filter Values"
weight: 2
---

# BO - Catalog - Features - Filter Values
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1784
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/02_features/features/01_filterFeatures.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/attributes-and-features/features/features-list-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Features page | The Features page is well displayed |
| View the first Feature | Page title = Composition and the Values list page is displayed |
| Reset Filter | Number Values  = Total Values |
| Filter by ID | Number Values < Total Values and the list contains the searched ID |
| Reset Filter | Number Values  = Total Values |
| Filter by Value | Number Values < Total Values and the list contains the searched value |
| Reset Filter | Number Values  = Total Values |
