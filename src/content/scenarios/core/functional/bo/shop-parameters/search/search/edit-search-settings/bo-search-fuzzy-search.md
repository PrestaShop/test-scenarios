---
title: "BO - Search - Fuzzy search"
weight: 3
---

# BO - Search - Fuzzy search
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3611
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/01_editSearchSettings/03_fuzzySearch.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search page | The Search page is well displayed |
| In the Search Settings section > Disable "Fuzzy search" and Save | The green alert "The settings have been successfully updated." is well displayed |
| Go to FO > Click on the search bar on the header > Write a word on it (min 3 characters length) & click enter | * No autocomplete list is displayed<br> * The search bar in the header keeps the word written<br> * The "Search results" page is displayed with the content:<br> ** Title: No matches were found for your search<br> ** Description: Please try other keywords to describe what you are looking for.<br> ** A search bar with "test" displayed |
| Go to BO > Sho Parameters > Search page & Enable the "Fuzzy search" > Save | A green alert "The settings have been successfully updated." |
| Go to FO > Click on the search bar on the header > Write a word on it (min 3 characters length) and click enter | * The autocomplete list is displayed with 7 products<br> * The search bar in the header keeps the word written<br> * The "Search results" page is displayed with 7 products |
