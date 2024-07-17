---
title: "BO - Shop Parameters - Search - Indexing"
weight: 3
---

# BO - Shop Parameters - Search - Indexing
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1127
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/03_indexing.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Block Indexing | See Indexed products 19 / 19. |
| Add a product > Put online | Product is created |
| Go back to BO > Shop Parameters > Search > Block Indexing | See Indexed products 20 / 20. |
| Disable automatic Indexing > Save | The settings have been successfully updated. message is displayed |
| Add a product > Put online | Product is created |
| Go back to BO > Shop Parameters > Search > Block Indexing | See Indexed products 20 / 21. |
| Click Add missing products to the index | Successful update message is displayed<br><br>See Indexed products 21 / 21. |
