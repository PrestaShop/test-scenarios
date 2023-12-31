---
title: "BO - Shop Parameters - Search - Tags - CRUD"
weight: 2
---

# BO - Shop Parameters - Search - Tags - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1131
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/02_tags/01_CRUDTag.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters >Search > Tags | Tags page is well displayed<br><br> Tags table is empty  = 0 |
| Click on "Add new Tag" | Add new  tag page will display |
| fill the blanks of the Name , Language > double click on a product / or choose a product a click on add<br><br> <br><br>Click on Save | Tags  page is well displayed<br><br>Successful message is displayed .<br><br>the tags  table  +1 : ( with ID (1) , LANGUAGE(anglais)  , NAME (Test_tag)  ,  Products (1)   ) |
| click on the   Edit button | the edit page will dislay |
| change some data >Save | Tags  page is well displayed<br><br>Successful update message is displayed .<br><br>the tags  table  +1 : ( with ID (1) , LANGUAGE(francais)  , NAME (tag_1)  ,  Products (2)   ) |
| Click on the dropdown -toggle > Delete | Confirmation modale displayed: <br><br>Delete selected item?<br><br>Name: tag_1 |
| Click on Yes | succesful message is displayed "Successful deletion"<br><br>the tags  table =0 |