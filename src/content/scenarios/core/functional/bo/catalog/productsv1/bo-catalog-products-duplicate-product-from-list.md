---
title: "BO - Catalog - Products - Duplicate Product from list"
weight: 8
---

# BO - Catalog - Products - Duplicate Product from list
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-787

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products page | The Product list page is displayed |
| Reset all Filters | Number of products = Total of products |
| Filter by Product Name | Number of products < Total of products<br><br>All products contains the searched Name |
| Click on the drop-down toggle and click on Duplicate | An alert "Product successfully duplicated." is displayed and the product Name contains "copy of searched Name" |
| Go to Products list page and delete the duplicated product | The product is weel removed |
| Reset all filters | Number of products = Total of products |