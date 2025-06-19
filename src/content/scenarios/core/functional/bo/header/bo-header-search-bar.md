---
title: "BO - Header - Search bar"
weight: 3
---

# BO - Header - Search bar
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-704
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/15_header/03_searchBar.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/common-components/back-office-header/search-input-field

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Search for "orders" | 3 types of results are displayed:<br> - feature<br> - modules<br> - Search docs.prestashop-project.org |
| Search for John Doe | The customer "John Doe" is listed |
