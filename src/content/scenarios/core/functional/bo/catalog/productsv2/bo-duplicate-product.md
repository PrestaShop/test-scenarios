---
title: "BO - Duplicate product"
weight: 7
---

# BO - Duplicate product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4822
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/06_duplicateProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Filter with reference > Click on "Search" button | Only one product is displayed |
| Duplicate the product by using the "three dots" icon on the right > Click on Duplicate | A modal is displayed with two buttons:<br> * Cancel<br> * Duplicate |
| Click on "Duplicate" button | An alert "Product successfully duplicated." is displayed<br><br>The product Name contains "copy of searched Name" |
| Click on the Duplicate button on the footer of the product page > Duplicate | An alert "Product successfully duplicated." is displayed<br><br>The product Name contains "copy of copy of searched Name" |
| Go to the Products list page and delete the 2 duplicated products | The products are well removed |
| Click on "X Reset" button | * All filters are reset.<br> * All products are displayed. |
