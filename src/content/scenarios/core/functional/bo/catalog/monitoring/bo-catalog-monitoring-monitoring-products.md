---
title: "BO - Catalog - Monitoring - Monitoring products"
weight: 2
---

# BO - Catalog - Monitoring - Monitoring products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-800

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Page title contains 'Products' |
| Create product without image | Alert "Settings updated." is displayed |
| Go to BO > Catalog > Monitoring | Page title contains 'Monitoring' |
| Scroll down to block "Product without image" > Filter by the name of product created | Product is displayed in block 'Product without image' |
| Delete product from block 'Product without image' | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
| Disable a product | Alert "Product successfully deactivated." is displayed |
| Go to Catalog > Monitoring page | Page title contains 'Monitoring' |
| Scroll down to block "List of disabled products" | Product is displayed in block 'List of disabled products' |
| Delete product from block "List of disabled products" | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
| *Reset products grid in products page* | Number of products After reset = total of products |
| Go to BO > Catalog > Products page | Page title contains 'Products' |
| Create a product 'Without Combinations Without Quantity' | Alert "Settings updated." is displayed |
| Go to Catalog > Monitoring page | Page title contains 'Monitoring' |
| Scroll down to block "List of products without combinations and without available quantities for sale" | Product is displayed in block 'List of products without combinations and without available quantities for sale' |
| Delete product from block 'List of products without combinations and without available quantities for sale' | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
| Create product 'With Combinations Without Quantity' | Alert "Settings updated." is displayed |
| Go to Catalog > Monitoring page | Page title contains 'Monitoring' |
| Scroll down to block "List of products with combinations but without available quantities for sale" | Product is displayed in block 'List of products with combinations but without available quantities for sale' |
| Delete product from block 'List of products with combinations but without available quantities for sale' | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
| Create product 'Without price' | Alert "Settings updated." is displayed |
| Go to Catalog > Monitoring page | Page title contains 'Monitoring' |
| Scroll down to block "List of products without price" | Product is displayed in block 'List of products without price' |
| Delete product from block 'List of products without price' | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
| Create product 'Without description' | Alert "Settings updated." is displayed |
| Go to Catalog > Monitoring page | Page title contains 'Monitoring' |
| Scroll down to block "List of products without description and summary" | Product is displayed in block 'List of products without description and summary' |
| Delete product from block 'List of products without description and summary' | Redirection to Products page<br><br>Alert "Product successfully deleted." is displayed |
