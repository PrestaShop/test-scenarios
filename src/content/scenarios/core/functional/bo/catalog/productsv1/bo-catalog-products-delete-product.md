---
title: "BO - Catalog - Products - Delete product"
weight: 9
---

# BO - Catalog - Products - Delete product
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-788

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products page | The Products page is displayed |
| Reset all filters | Number of products = Total of products |
| Filter Products by Name | Number of products < Total of products<br><br>All the products contains the searched Name |
| Click on the drop-down toggle, click on "Delete" and confirm the deletion | An alert "Product successfully deleted." is displayed and the total products = total products - 1 |
| Reset all filters | Number of products = Total of products |
