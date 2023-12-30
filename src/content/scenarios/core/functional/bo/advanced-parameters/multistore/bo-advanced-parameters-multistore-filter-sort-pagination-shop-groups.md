---
title: "BO - Advanced Parameters - Multistore - Filter sort pagination shop groups"
weight: 3
---

# BO - Advanced Parameters - Multistore - Filter sort pagination shop groups
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1184
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/02_filterSortAndPaginationShopGroups.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  Shop Parameters > Général > Enable Multistore > save | * A green alert "Successful update" is displayed |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on " Add new group of stores " | add new  page is displayed |
| Fill the informations  of the new store group >save | * The content is added to STORE GROUP  and to multistore tree<br> * A green alert "Successful creation" is displayed |
| reset all filters | Number of Store group > 0 |
| filter by ID : 1 | Number of store group < Total of store group<br>The  id result is equal to the searched ID . |
| reset all filters | Number of Store group > 0 |
| filter by store group  name: new_group | Number of store group< Total of store group<br>The  store group name  result is equal to the searched store group name. |
| reset all filters | Number of Store group > 0 |
| Sort by ID ASC | The Store group are sorted by ID ASC |
| Sort by ID DESC | The Store group are sorted by ID DESC |
| Sort by Store group name ASC | The Store group are sorted by Store group name ASC |
| Sort by Store group name DESC | The Store group are sorted by Store group name DESC |
| reset all filters and get the number of all Shop group created | Number of Store group =21 |
| Change "items per page" to 20 | Page reloads with 20 items on the first page<br><br>Buttons appear to go to the next page 1/2<br><br>The number of pages is correct |
| Click on the next button | The next page is well displayed and check (page 2 / *2*) is correct |
| Click on Previous button | The first page is well displayed |
| Change "items per page" to 50 | Page reloads with 50 items on the first page<br><br>there is only one page 1/1<br><br>The number of pages is correct |
| Delete all group of store expected "Default" | Number of store = 1 |