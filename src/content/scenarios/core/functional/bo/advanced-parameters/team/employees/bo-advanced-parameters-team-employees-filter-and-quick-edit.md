---
title: "BO - Advanced parameters - Team - Employees - Filter and Quick Edit"
weight: 1
---

# BO - Advanced parameters - Team - Employees - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1150
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/employees/01_filterAndQuickEditEmployees.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/team-employees

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
