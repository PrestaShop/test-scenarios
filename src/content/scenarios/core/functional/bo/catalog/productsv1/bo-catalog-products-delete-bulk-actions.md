---
title: "BO - Catalog - Products - Delete Bulk actions"
weight: 11
---

# BO - Catalog - Products - Delete Bulk actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-790

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products page | The Product list page is displayed |
| Reset all Filters | Number of products = Total of products |
| Filter by Product Name | Number of products < Total of products<br> <br>All products contain the searched Name |
| Click on the drop-down toggle and click on Delete | A confirm modal "Delete Products?" is displayed |
| Click on "Delete" button | A confirm message "Product(s) successfully deleted." is displayed |
| Reset all filters | Number of products = Total of products |
