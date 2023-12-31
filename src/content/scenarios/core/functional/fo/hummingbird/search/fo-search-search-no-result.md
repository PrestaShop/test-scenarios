---
title: "FO - Search - Search no result"
weight: 3
---

# FO - Search - Search no result
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-5104

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: With less than 3 characters*<br>Go to FO > Click on the search bar on the header > Write a word on it (less than 3 characters length) and click on "Enter" | * No autocomplete list is displayed<br> * The search bar in the header keeps the word written<br> * The "Search results" page is displayed with the content:<br> ** Title: No search results for "te"<br> ** Description: Search again what you are looking for.<br> ** A search bar with the word written |
| *Case 2: Without any characters*<br>Go to FO > Click on the search bar on the header > Click on "Enter" | The "Search results" page is displayed with those content:<br> * Title: No search results for ""<br> * Description: Search again what you are looking for.<br> * An empty search bar |
