---
title: "FO - Search - Search a product and validate"
weight: 2
---

# FO - Search - Search a product and validate
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5103
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/07_search/02_searchProductAndValidate.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on the search bar on the header > Write a word on it (min 3 characters length) | The autocomplete list is displayed with 3 products with all "notebook" characters on products title |
| *Case 1: Choose a product on the list*<br>Select & click on the product "Mountain fox notebook" for example | * It well redirected on the product page detail<br> * The search bar in the header is empty |
| Click on logo link and go to home page | The Home page is displayed |
| *Case 2: Click on "Enter"*<br> * Click on the search bar on the header > Write a word on it (min 3 characters length)<br> * Click on enter when the list is displayed | * The "Search results" page is displayed with all "Mountain fox notebook" characters<br> * The search bar in the header keep the word written |
