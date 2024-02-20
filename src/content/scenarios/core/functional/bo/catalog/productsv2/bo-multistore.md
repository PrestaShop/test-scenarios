---
title: "BO - Multistore"
weight: 20
---

# BO - Multistore
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5221
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/20_multistore.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  BO > Shop Parameters > General > Enable multistore > Save | A success message will appear : "Successful update" |
| Go to Advanced Parameters > Multistore | Multistore page is well displayed |
| Click on Add a new store | A page is displayed with the title : "Add new" |
| Enter the following data of the new store | A success message will appear : "Successful creation" |
| Click on "Click here to set a URL for this shop." > Set the virtual URL > Save | A success message will appear : "Successful creation"<br><br>The new shop page is well displayed. |
| Go to Catalog > Products | The listing of products is displayed for the initial store |
| Click on the multishop header | A multishop modal is displayed : <br> * All stores <br> * Group Default<br> ** initial store     <br> ** new shop |
| Click on "new shop" | The listing of products is displayed for your "new shop" store.<br><br>The multishop header is displayed with "new shop" store and color : #00a7ac |
| Click on "View my store" | The FO/URL of the new shop is displayed |
| Create standard product > Put online > Save |  |
| Click on multistore header : Select stores > Check your "initial shop" > Save > Go back to product listing > Change your context shop to "new shop" | See your new product added to new store |
| Edit your latest product > Edit the product name > Check "Apply changes to all stores" > Save and publish | A success message will appear : "Successful creation" |
| Go back to product listing | The product name has been well saved |
| Change context shop to initial store | The product name has been well saved |
