---
title: "FO - Search - Search no result"
weight: 3
---

# FO - Search - Search no result
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1231
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/07_search/03_searchNoResult.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: With less than 3 characters*<br>Go to FO > Click on the search bar on the header > Write a word on it (less than 3 characters length) and click on "Enter" | * No autocomplete list is displayed<br> * The search bar in the header keeps the word written<br> * The "Search results" page is displayed with the content:<br> ** Title: No matches were found for your search<br> ** Description: Please try other keywords to describe what you are looking for.<br> ** A search bar with the word written |
| *Case 2: Without any characters*<br>Go to FO > Click on the search bar on the header > Click on "Enter" | The "Search results" page is displayed with those content:<br> * Title: No matches were found for your search<br> * Description: Please try other keywords to describe what you are looking for.<br> * An empty search bar |
