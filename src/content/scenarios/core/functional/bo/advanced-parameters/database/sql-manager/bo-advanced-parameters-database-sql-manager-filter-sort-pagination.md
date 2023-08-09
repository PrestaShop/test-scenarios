---
title: "BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination"
weight: 4
---

# BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1166

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Click on "Add new SQL query " | new page will display with<br> * a form contains a sql query name field and a sql query field .<br> * a list of MYSQL Tables <br> * list of attributes for this MYSQL  Table |
| add a SQL query name and SQL query | SQL Manager page is well displayed<br><br>Successful message is displayed .<br><br>the SQL Manager table +1 |
| Click on dropdow-toggle > View | Table with id_profile and id_authorization_role displayed |
| Click to SQL Manager | SQL Manager page displayed |
| click on the dropdown-toggle > edit | the SQL Manager page of the latest sql query created is well displayed |
| change the informations of the SQL query | succesful message is displayed "Successful update"<br><br>the informations of the SQL query are updated |
| Click on the dropdown -toggle > Delete | Modale displayed with 2 buttons: Cancel and Delete<br><br> <br><br>Message : <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click on Delete | succesful message is displayed "Successful deletion"<br><br>the SQL manager table =0 |
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
