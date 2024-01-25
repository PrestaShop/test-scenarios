---
title: "BO - Shop Parameters - Search - CRUD"
weight: 1
---

# BO - Shop Parameters - Search - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1124
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/01_CRUDSearch.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search/search

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters >Search | Search page is well displayed |
| Click on Add new alias | a  new page is displayes named : Add new |
| Create a new aliase >click on save | a new alias is added to the list .<br><br>Alert Successful creation is displayed |
| Click on edit for the created alias | A new page is well displayed named : Edit : puul |
| change the informations >click on save | Successful update message  is displayed |
| Click on the dropdown then click on delete | a popup is displayed with content : <br><br>Delete selected item? <br><br>Yes /No |
| click on Yes to delete the item | Alert Successful deletion message  is displayed<br>The Alias is well deleted from the list |
