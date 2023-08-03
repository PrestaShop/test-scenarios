---
title: "BO - Catalog - Products - Delete Bulk actions"
weight: 11
---

# BO - Catalog - Products - Delete Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-790
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/06_bulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products page | The Product list page is displayed |
| Reset all Filters | Number of products = Total of products |
| Filter by Product Name | Number of products < Total of products<br> <br>All products contain the searched Name |
| Click on the drop-down toggle and click on Delete | A confirm modal "Delete Products?" is displayed |
| Click on "Delete" button | A confirm message "Product(s) successfully deleted." is displayed |
| Reset all filters | Number of products = Total of products |
