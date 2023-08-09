---
title: "BO - Advanced Parameters - Database - SQL Manager - CRUD"
weight: 1
---

# BO - Advanced Parameters - Database - SQL Manager - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1163

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to advanced Parameters > Database > SQL Manager | SQL Manager page is well displayed<br><br>the SQL Manager table is empty  = 0 |
| Click on "Add new SQL query " | new page will display with<br> * a form contains a sql query name field and a sql query field .<br> * a list of MYSQL Tables <br> * list of attributes for this MYSQL  Table |
| add a SQL query name and SQL query | SQL Manager page is well displayed<br><br>Successful message is displayed .<br><br>the SQL Manager table +1 |
| Click on dropdow-toggle > View | Table with id_profile and id_authorization_role displayed |
| Click to SQL Manager | SQL Manager page displayed |
| click on the dropdown-toggle > edit | the SQL Manager page of the latest sql query created is well displayed |
| change the informations of the SQL query | succesful message is displayed "Successful update"<br><br>the informations of the SQL query are updated |
| Click on the dropdown -toggle > Delete | Modale displayed with 2 buttons: Cancel and Delete<br><br> <br><br>Message : <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click on Delete | succesful message is displayed "Successful deletion"<br><br>the SQL manager table =0 |
