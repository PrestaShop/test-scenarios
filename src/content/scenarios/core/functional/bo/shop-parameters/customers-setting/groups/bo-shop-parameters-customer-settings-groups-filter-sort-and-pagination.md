---
title: "BO - Shop Parameters - Customer Settings - Groups - Filter, sort and pagination"
weight: 1
---

# BO - Shop Parameters - Customer Settings - Groups - Filter, sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1089
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/02_groups/01_filterSortAndPaginationGroups.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO >  Shop parameters > Customer Settings  >  Groups | Customers - Groups page is well displayed |
| In Groups section > Fill all information :Groupe Name |Discount%|Members|Show prices|<br><br><br>> click on search button | The filter result should appear |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| filter by ID. | Groups list is filtered. Groups listed have *2* in their ID" |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| filter by groupe name. | Pages list is filtered. Pages listed have the Groupe name customer in their name |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| filter by members. | Pages list is filtered. Pages listed have the members number = 2 |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| filter by Show prices. | Pages list is filtered. Pages listed have the show prices field is yes |
| Reset all filters of Groups table | Pages list is filtered. Pages listed have the show prices field is yes |
| Filter by date creation | Pages list is filtered. Pages listed have the creation date value |
| Reset all filters of Groups table | All filters are reset. All Groups are displayed |
| Sort by ID | The list of pages is sorted in descending order by ID desc (3 -> 2 -> 1) |
| Sort by Group name | The list of pages is sorted in ascending order by Group name asc (a -> b -> c) |
| Sort by Discount | Pages list is sorted ascently by Group name |
| Sort by Members | The list of pages is sorted in ascending order by Members (asc (1 -> 2 -> 3) |
| Sort by date creation | The list of pages is sorted in descending order by Creation date |
| Create 18 new groups from BO | 18 groups are created |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete the Created groups | Groups are well deleted |
| Sort by Discount | The list of pages is sorted in descending order by Discount ( desc (3 -> 2 -> 1) ) |
| Delete created groups by bulk actions |  |