---
title: "BO - Delete product"
weight: 6
---

# BO - Delete product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3554
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/03_productsBO/05_deleteProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the name on "Description" tab and the "Reference" on "Details" tab > Click on the "Save button" at the bottom of the page | "Successful update" message is displayed |
| Clic on "< Go to catalog " button at the bottom-left | Products list page is displayed correctly |
| Filter with reference > Click on "Search" button | Only one product is displayed |
| Delete the product by using the "three dots" icon on the right > Click on Delete | A modal is displayed with two buttons:<br> * Cancel<br> * Delete |
| Click on "Delete" button | * "No records found" text is displayed instead of the product list<br> * "Successful deletion" message is displayed<br> * The product is well removed |
| Click on "X Reset" button | * All filters are reset.<br> * All products are displayed. |
