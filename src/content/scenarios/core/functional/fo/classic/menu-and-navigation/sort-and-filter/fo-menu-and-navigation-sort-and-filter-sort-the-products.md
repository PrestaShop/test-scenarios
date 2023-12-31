---
title: "FO - Menu and Navigation - Sort and filter - Sort the products"
weight: 1
---

# FO - Menu and Navigation - Sort and filter - Sort the products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1240
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/02_sortAndFilter/01_sortProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to all products page | The sort should default to "Relevance" |
| Sort products by Name, A to Z | Products are sorted by name (x -> y -> z) |
| Sort products by Name, Z to A | Products are sorted by name (z -> y -> x) |
| Sort products by Price, low to high | Products are sorted by Price (1 -> 2 -> 3) |
| Sort products by Price, high to low | Products are sorted by Price (3 -> 2 -> 1) |
| Sort products by Relevance | Products are sorted by ID product desc (3 -> 2 -> 1) in FO |
| Sort products by Sales, highest to lowest | No sales yet, so the products are sorted by Relevance |
| Go to BO > Orders > Orders > Changed the Order status of the latest order (ID : 5) to "Payment accepted" | Message Successful update is displayed |
| Go back to FO > All Products > Refresh | See that the first product shown is Brown bear cushion Color : Black<br><br>It is the same product as in the Order |
