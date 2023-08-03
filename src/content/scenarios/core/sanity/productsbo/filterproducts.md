---
title: "FilterProducts"
weight: 1
---

# FilterProducts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1335
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/03_productsBO/01_filterProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > Products" page" | Products listing is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Save the numbers of products in a variable | Number of products is saved |
| Filter the list by name. Criteria : Customizable mug" | Products list is filtered. Products listed have Customizable mug" in their name" |
| Reset all filters | All filters are reset. All products are displayed. Number of products displayed is equal to the number saved |
| Filter the list by reference. Criteria : demo_1" | Products list is filtered. Products listed have demo_1" in their reference" |
| Reset all filters | All filters are reset. All products are displayed. Number of products displayed is equal to the number saved |
| Filter the list by category. Criteria : Men" | Products list is filtered. Products listed have Men" in their categories" |
| Reset all filters | All filters are reset. All products are displayed. Number of products displayed is equal to the number saved |
