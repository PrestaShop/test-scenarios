---
title: "BO - International - Taxes - Filter and Quick Edit"
weight: 1
---

# BO - International - Taxes - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1023
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/01_taxes/01_filterAndQuickEditTaxes.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/taxes-listing

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO | Login page is displayed |
| Sign in to Bo | Dashboard page is displayed |
| Go to International -> Taxes Page | Taxes Page is displayed |
| Reset filter and get number of taxes in BO | Number of taxes is above 0 |
| Filter by id<br>Criteria : 1 | First element in grid has id=1<br>Number of taxes after filter < Number of all taxes |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
| Filter by name <br>Criteria : TVA FR 20% | First element in grid has name that contains 'TVA FR 20%'<br>Number of taxes after filter < Number of all taxes |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
| Filter By rate<br>Criteria : 20 | First element in grid has 20 in rate value<br>Number of taxes after filter < Number of all taxes |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
| Filter By enabled<br>Criteria : Yes | All elements in grid are enabled<br>Number of taxes after filter < Number of all taxes |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
| Filter by name <br>Criteria : TVA FR 20% | First element in grid has name that contains 'TVA FR 20%'<br>Number of taxes after filter < Number of all taxes |
| Disable first row displayed (by clicking in column) | First tax is disabled |
| Enable first row (by clicking in column) | First tax is enabled |
| Reset All filters | Filters are reset<br>Number of taxes after reset = Number of all taxes |
