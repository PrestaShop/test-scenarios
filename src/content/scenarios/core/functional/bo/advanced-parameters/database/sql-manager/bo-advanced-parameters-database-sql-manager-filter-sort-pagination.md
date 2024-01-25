---
title: "BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination"
weight: 4
---

# BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1166
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/07_database/sqlManager/04_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/database/sql-manager

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| create 20 new SQL  query | SQL Manager page is well displayed<br><br>the SQL Manager table  = 20 |
| Reset all filters | All filters are reset , the query sql are  displayed |
| Sort SQL Manager  by ID desc | SQL Manager are sorted by ID (4 -> 3 -> ...) |
| Sort SQL Manager  by ID asc | SQL Manager are sorted by ID (1 -> 2 -> 3...) |
| Sort SQL Manager  by SQL query name desc | SQL Manager are sorted by SQL query name  ( z-> y -> ...) |
| Sort SQL Manager  by SQL query name asc | SQL Manager are sorted by SQL query name  ( a-> b ->c ...) |
| Sort SQL Manager  by SQL query  desc | SQL Manager are sorted by SQL query   ( z-> y -> ...) |
| Sort SQL Manager  by SQL query  asc | SQL Manager are sorted by SQL query   ( a-> b ->c ...) |
| Filter by ID | SQL Manager  list is filtered by ID=3 |
| Filter by  SQL query name | SQL Manager  list is filtered by SQL query name  =test |
| Filter by   SQL query | SQL Manager  list is filtered by SQL query =  select * from ps_access |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
| Delete created sql query by bulk actions |  |
