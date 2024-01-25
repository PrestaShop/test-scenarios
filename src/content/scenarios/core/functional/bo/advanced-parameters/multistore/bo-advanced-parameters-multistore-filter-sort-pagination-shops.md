---
title: "BO - Advanced Parameters - Multistore - Filter sort pagination  shops"
weight: 4
---

# BO - Advanced Parameters - Multistore - Filter sort pagination  shops
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1185
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/04_filterSortAndPaginationShops.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on " Add new store " | add new  page is displayed |
| Fill the informations  of the new shop >save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| reset all filters | Number of  shops  > 0 |
| filter by ID : 1 | Number of shops < Total of shops<br>The  id result is equal to the searched ID . |
| reset all filters | Number of  shops  > 0 |
| filter by Store name: test_shop | Number of shop< Total of shop<br>The Store name  result is equal to the searched Store name. |
| reset all filters | Number of  shops  > 0 |
| filter by Store group : Default | The Store group  result is equal to the searched Store group |
| reset all filters | Number of  shops  > 0 |
| filter by Root category : Home | The Root category result is equal to the searched Root category |
| reset all filters | Number of  shops  > 0 |
| filter by Main URL for this shop :  exp [http://127.0.0.1:8074/.....|http://127.0.0.1:8074/PS8.1.1/] | The Main URL for this shop result is equal to the searched Main URL for this shop |
| reset all filters | Number of  shops  > 0 |
| Sort by Shop ID ASC | Theshops  are sorted by Shop ID ASC |
| Sort by Shop ID DESC | Theshops  are sorted by Shop ID DESC |
| Sort by Store name ASC | The shops  are sorted by Store name ASC |
| Sort by Store name DESC | The shops  are sorted by Store name DESC |
| Sort by Store group ASC | The shops  are sorted by Store group ASC |
| Sort by Store group ASC | The shops  are sorted by Store group ASC |
| Sort by Store group DESC | The shops  are sorted by Store group DESC |
| Sort by Root category ASC | The shops  are sorted by Root category ASC |
| Sort by Root category DESC | The shops  are sorted by Root category DESC |
| Sort by  Main URL for this shop ASC | The shops  are sorted by Main URL for this shop  ASC |
| Sort by  Main URL for this shop DESC | The shops  are sorted by Main URL for this shop  DESC |
| reset all filters and get the number of all Shops created | Number of shops   =21 |
| Change "items per page" to 20 | Page reloads with 20 items on the first page<br><br>Buttons appear to go to the next page 1/2<br><br>The number of pages is correct |
| Click on the next button | The next page is well displayed and check (page 2 / *2*) is correct |
| Click on Previous button | The first page is well displayed |
| Change "items per page" to 50 | Page reloads with 50 items on the first page<br><br>there is only one page 1/1<br><br>The number of pages is correct |
| Delete all store expected "Default" | Number of store = 1 |
