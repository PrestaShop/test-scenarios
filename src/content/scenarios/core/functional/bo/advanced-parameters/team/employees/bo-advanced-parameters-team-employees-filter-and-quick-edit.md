---
title: "BO - Advanced parameters - Team - Employees - Filter and Quick Edit"
weight: 1
---

# BO - Advanced parameters - Team - Employees - Filter and Quick Edit
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team' page | title contains 'Employees' |
| reset filter | Total of employees > 0 |
| go to add new employee | title contains 'Add new' |
| create employee<br>Criteria : <br>firstName: name.firstName from faker<br>lastName: name.lastName from faker<br>email: internet.email(this.firstName, this.lastName, 'prestashop.com') from faker<br>password: prestashop_demo<br>defaultPage: Orders<br>language: radom element from array ['english, french']<br>active: false<br>permissionProfile: 'Logistician' | Successful message is displayed<br>Number of employees = Total of employees + 1 |
| filter by 'id_employee' | Number of employees < Total of employees + 1<br>all rows column 'column' id_employee '3' |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'firstname' | Number of employees < Total of employees + 1<br>all rows column 'firstname' contains 'value' of created employee |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'lastname' | Number of employees < Total of employees + 1<br>all rows column 'lastname' contains value of created employee |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'email' | Number of employees < Total of employees + 1<br>all rows column 'email' contains value of created employee |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'active' | Number of employees < Total of employees + 1<br>all rows column 'active' contains 'clear' |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'email' | Number of employees < Total of employees + 1<br>all rows column 'email' contains value of created employee |
| disable first employee in table | first row column 'active' contains 'clear' |
| enable first employee in table | first row column 'active' contains 'check' |
| reset filter | Number of employees = Total of employees + 1 |
| filter by 'email' | Number of employees < Total of employees + 1<br>all rows column 'email' contains value of created employee |
| delete employee | Successful message is displayed |
| reset filter | Number of employees = Total of employees |
