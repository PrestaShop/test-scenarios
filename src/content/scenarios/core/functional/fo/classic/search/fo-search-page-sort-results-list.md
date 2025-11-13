---
title: "FO - Search Page : Sort results list"
weight: 5
---

# FO - Search Page : Sort results list
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1234
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/07_search/05_sortResultsList.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In search bar type "mug" | Search results for "mug" page is displayed with 5 items found.<br><br>Sorted by Relevance |
| Sort by: Name, A to Z | Items are sorted from A to Z |
| Sort by: Name, Z to A | Items are sorted from Z to A |
| Sort by: Price, low to high | Items are sorted by Price, low to high |
| Sort by: Price, high to low | Items are sorted by Price, high to low |
| Sort by: Relevance | Items are sorted by Relevance |
