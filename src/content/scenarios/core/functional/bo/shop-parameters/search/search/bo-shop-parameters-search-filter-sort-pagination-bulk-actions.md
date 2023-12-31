---
title: "BO - Shop Parameters - Search - Filter, sort, pagination, Bulk actions"
weight: 2
---

# BO - Shop Parameters - Search - Filter, sort, pagination, Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1123
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/02_filterSortPaginationAndBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Bo > Shop parameters > Search | Title page contains 'Search' |
| Click to "Add new alias" | Title page contains 'Add new' |
| Create 39 new alias | "Successful creation" notification<br><br>You've got 41 alias |
| Click on the number next to "Display" and select a number | You've got 20 alias in this page and 3 pages |
| Click to page 3 | Page 3 is displayed, you've got 1 alias on this page and you've got 3 page |
| Click on the left arrow next to the First page | Page 2 is displayed, you've got 20 alias on this page and you've got 3 page |
| Click on the left arrow next to the First page | Page 1 is displayed, you've got 20 alias on this page and you've got 3 page |
| Click on the double right arrow next to the last page | Page 3 is displayed, you've got 1 alias on this page and you've got 3 page |
| Click on the number next to "Display" and select a number | You've got 41 alias on this page and 1 page |
| Sort by Aliases acs | table is sorted by Aliases desc (a > b> c) |
| Sort by Aliases desc | table is sorted by Aliases desc (c > b> a) |
| Sort by Search acs | table is sorted by Search desc (a > b> c) |
| Sort by Search desc | table is sorted by Search desc (c > b> a) |
| Filter Search by Aliases | Number of Search < Total of Search<br>All Search name contains 'bloose' |
| Reset filter | Number of search = Total of search |
| Filter Search by Search | Number of Search < Total of Search<br>All Search name contains 'blouse' |
| Reset filter | Number of search = Total of search |
| Click to the checkbox of 3 Searches | Searches checked |
| click to "Bulk actions" > "Disable selection" | "The status has been successfully updated." notification<br><br>Theses 3 Searches are disable |
| Click to the checkbox of 1 Search | Search checked |
| click to "Bulk actions" > "Enable selection" | "The status has been successfully updated." notification<br><br>This search are enable |
| Filter Search by Status | Number of Searches < Total of Searches<br>All Search statuses are 'Disable' |
| Reset filter | Number of search = Total of search |
| Filter Search by Status | Number of Searches < Total of Searches<br>All Search statuses are 'Enable' |
| Filter Search by status | Number of search = Total of search |
| Click on bulk actions > select all | All searches are selected |
| Click on bulk actions > unselect all | All searches are unselected |
| Filter by Aliases | Number of Searches = 39 |
| Click on "Bulk action" > "Select all" > "Bulk actions" > "Delete selected" | "Delete selected items?" Modal |
| Click to OK | "The selection has been successfully deleted" notification |
| Reset filter | Number of searches = Total of searches <br><br>1 page, pagination is deleted |