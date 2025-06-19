---
title: "BO - Search - Search within word"
weight: 1
---

# BO - Search - Search within word
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3609
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/01_editSearchSettings/01_searchWithinWord.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search/search

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Search within word | Option Search within word is disabled |
| Click on View my shop > Search in searchbar : "book" | SEARCH RESULTS<br>There are 3 products.<br><br>No product with title "book". Only the posters are displayed. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search > Enable option Search within word > Save | The settings have been successfully updated. |
| Click on View my shop > Search in searchbar : "book" | SEARCH RESULTS<br>There are 3 products.<br><br>3 products with title "book" : <br>Mountain Fox Notebook<br>Brown Bear Notebook<br>Hummingbird Notebook |
