---
title: "BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination"
weight: 4
---

# BO - Advanced Parameters - Database - SQL Manager - Filter sort pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Click on "Add new SQL query " | new pas will display with<br> * a form contains a sql query name field and a sql query field .<br> * a list of MYSQL Tables <br> * list of attributes for this MYSQL  Table |
| add a SQL query name and SQL query | SQL Manager page is well displayed<br><br>Successful message is displayed .<br><br>the SQL Manager table is empty +1 |
| click on the dropdown-toggle > edit | the SQL Manager page of the latest sql query created is well displayed |
| change the informations of the SQL query | succesful message is displayed "Successful update"<br><br>the informations of the SQL query are updated |
| Click on the dropdown -toggle > Delete | succesful message is displayed "Successful deletion"<br><br>the SQL manager table =0 |
| create 20 new SQL  query | SQL Manager page is well displayed<br><br>the SQL Manager table  = 20 |
| Reset all filters | All filters are reset , the query sql are  displayed |
| Sort SQL Manager  by ID desc | SQL Manager are sorted by ID (4 -> 3 -> ...) |
| Sort SQL Manager  by ID asc | SQL Manager are sorted by ID (1 -> 2 -> 3...) |
| Sort SQL Manager  by SQL query name desc | SQL Manager are sorted by SQL query name  ( z-> y -> ...) |
| Sort SQL Manager  by SQL query name asc | SQL Manager are sorted by SQL query name  ( a-> b ->c ...) |
| Sort SQL Manager  by SQL query  desc | SQL Manager are sorted by SQL query   ( z-> y -> ...) |
| Sort SQL Manager  by SQL query  asc | SQL Manager are sorted by SQL query   ( a-> b ->c ...) |
| Filter by ID | list is filtered by ID<br><br>the ID of the carrier is well displayed on the top |
