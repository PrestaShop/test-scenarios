---
title: "BO - Advanced Parameters - Database - SQL Manager - Bulk actions"
weight: 5
---

# BO - Advanced Parameters - Database - SQL Manager - Bulk actions
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1167

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Click on "Add new SQL query " | new page will display with<br> * a form contains a sql query name field and a sql query field .<br> * a list of MYSQL Tables <br> * list of attributes for this MYSQL  Table |
| add a SQL query name and SQL query | SQL Manager page is well displayed<br><br>Successful message is displayed .<br><br>the SQL Manager table +1 |
| Click on dropdow-toggle > View | Table with id_profile and id_authorization_role displayed |
| Select the query created > Click on Bulk action > Delete selected | An alert "The selection has been successfully deleted." |
