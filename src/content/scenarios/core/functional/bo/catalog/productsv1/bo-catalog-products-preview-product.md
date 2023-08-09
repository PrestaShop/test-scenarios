---
title: "BO - Catalog - Products - Preview  Product"
weight: 7
---

# BO - Catalog - Products - Preview  Product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-786
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/04_previewProductFromList.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products page | The Product list page is displayed |
| Reset all filters | Number of products = total products |
| Filter products by Name | Number of products < Total products<br><br>All products name contains the Searched Name |
| Click on the drop-down toggle and click on Preview | The FO > Products details page is displayed and the product name = searched name |
| Click on product of your choice > Click on button Preview | Product page will open in another tab |
| Close the current tab | The BO > Catalog > Products page is well displayed |
| Reset all filters | Number of products = total products |
