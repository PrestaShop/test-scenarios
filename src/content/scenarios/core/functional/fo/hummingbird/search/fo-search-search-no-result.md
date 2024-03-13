---
title: "FO - Search - Search no result"
weight: 3
---

# FO - Search - Search no result
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5104
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/07_search/03_searchNoResult.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: With less than 3 characters*<br>Go to FO > Click on the search bar on the header > Write a word on it (less than 3 characters length) and press on "Enter" | No autocomplete is displayed<br><br><br>The search bar in the header keeps the word written<br><br><br>The "Search results" page is displayed with the content:<br> - Title: No search results for "te"<br> - Description: Search again what you are looking for.<br> - A search bar with the word written ([https://github.com/PrestaShop/hummingbird/issues/578]) |
| *Case 2: Without any characters*<br>Go to FO > Click on the search bar on the header > Press on "Enter" | The "Search results" page is displayed with those content:<br> * Title: Nothing to search for<br> * Description: Search again what you are looking for.<br> * An empty search bar ([https://github.com/PrestaShop/hummingbird/issues/578]) |
