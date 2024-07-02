---
title: "BO - Search - Maximum approximate words allowed by fuzzy search"
weight: 4
---

# BO - Search - Maximum approximate words allowed by fuzzy search
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3612
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/01_editSearchSettings/04_maxApproximateAllowedWordsByFuzzySearch.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search/search

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum approximate words allowed by fuzzy search | 4 is displayed |
| Edit Maximum approximate words allowed by fuzzy search : 3 > Save | The settings have been successfully updated. |
| Click on View my shop > Search in searchbar : "notenook" | SEARCH RESULTS<br>There are 3 products.<br><br>Mountain Fox Notebook<br>Brown Bear Notebook<br>Hummingbird Notebook |
| Click on View my shop > Search in searchbar : "briow beer" | SEARCH RESULTS<br>There are 3 products.<br><br>Brown Bear Cushion<br>Brown Bear - Vector Graphics<br>Brown Bear Notebook |
