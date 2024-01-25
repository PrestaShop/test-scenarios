---
title: "BO - Shop Parameters - Search - Tags - Filter, sort, pagination, Bulk actions"
weight: 1
---

# BO - Shop Parameters - Search - Tags - Filter, sort, pagination, Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1130
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/02_tags/02_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search/tags

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters >Search > Tags | Tags page is well displayed<br><br> Tags table is empty  = 0 |
| create 21 new tags | Tags page is well displayed<br><br>the tags table  = 21 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by ID =1 | list is filtered by  ID =1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by language  = english | list is filtered by  language = english |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by Name =Tag_1 | list is filtred by Name =Tag_1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Filter by Products =1 | list is filtred by Products =1 |
| Reset all filters | All filters are reset , all the Tags are  displayed |
| Sort tags by ID 'ASC ' | the Tags are sorted by ID (1 -> 2 -> 3...) |
| Sort tags by ID 'DESC ' | the Tags are sorted by ID (3-> 2 -> 1...) |
| Sort tags by Language 'ASC ' | the Tags are sorted by Language (A -> B -> C...) |
| Sort tags by Language 'DESC ' | the Tags are sorted by language (C -> B -> A..) |
| Sort tags by Name 'ASC ' | the Tags are sorted by Name (A -> B -> C...) |
| Sort tags by Name 'DESC ' | the Tags are sorted by Name (C -> B -> A..) |
| Sort tags by Products 'ASC ' | the Tags are sorted by Products (1 -> 2 -> 3...) |
| Sort tags by Products 'DESC ' | the Tags are sorted by Products (3 -> 2 -> 1..) |
| Change the items number to 20 per page | 2 pages are displayed (page 1/2)<br><br>Display 20/ 21 result(s) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
| Select one of th tags created > Click on Bulk actions > select all | all the tags will be selected |
| click on bulk actions > unselect all | all the tags will be unselected |
| Click on Bulk actions > select all | all the tags will be selected |
| Click on Bulk actions >delete selected | Confirmation modale displayed: Delete selected items? |
| Click on OK | An alert "The selection has been successfully deleted." |
