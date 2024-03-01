---
title: "FO - Search - Search product bar, consult autocomplete list"
weight: 1
---

# FO - Search - Search product bar, consult autocomplete list
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-5102

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on the search bar on the header > Write a word on it (min 3 characters length) | * The autocomplete list is displayed with 2 products<br> * The search bar in the header keeps the word written |
| Click outside | The autocomplete list is not displayed |
| *Case 1: With "Mug" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 5 products with all "mug" characters on the products title<br> * The search bar in the header keeps the word written |
| *Case 2: With "T-sh" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 1 product with all "t-sh" characters on the products title<br> * The search bar in the header keeps the word written |
| *Case 3: With "Notebook" products*<br>Click on the search bar on the header > Erase the last word and write another word on it (min 3 characters length) | * The autocomplete list is displayed with 3 products with all "notebook" characters on the products title<br> * The search bar in the header keeps the word written |
| *Case 4: With less than 3 characters*<br>Click on the search bar on the header > Erase the last word and write another word on it (less than 3 characters length) | No autocomplete list is displayed |
