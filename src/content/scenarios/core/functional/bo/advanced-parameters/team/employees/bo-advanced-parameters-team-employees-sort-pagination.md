---
title: "BO - Advanced parameters - Team - Employees - Sort pagination"
weight: 4
---

# BO - Advanced parameters - Team - Employees - Sort pagination
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1153

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Advanced parameters > Team > employees' page | title contains 'Employees'<br><br>employees list is well displayed |
| Go to BO > Advanced Parameters > Team | Employees Page opens |
| Click button Add an employee > Fill in fields > Choose Permission Profile : SuperAdmin > Choose Default Page : Order > Save | Message Successful creation. appears<br><br>Newly created employee appears in Employees list |
| Open a new tab in incognito mode > Go to admin URL > Log in with new Employee credentials | Order Page opens |
| Close window | Windows is closed |
| Go back to BO > Advanced Parameters > Team > Employee > Disable Employee | Message The status has been successfully updated. appears<br><br>Employee is disabled |
| Open a new tab in incognito mode > Go to admin page > Log in with disabled employee | Error appears:<br><br>*There is one error.*<br> # The employee does not exist, or the password provided is incorrect. |
| Go back to BO > Edit your profile by clicking on the pen > Edit password and your Default page | Profile is updated<br><br>Message Successful update. appears |
| Logout then login with the new password | See that the default page is updated |
| Logout then login by the default employee | Dashboard page is opened |
| Go to Employees list  > Filter by the created employee > Click delete > Delete | Employee is deleted.<br><br>Message Successful deletion. appears |
| create 20 new employees | employees page is well displayed<br><br>the employees table  = 20 |
| Reset all filters | All filters are reset , the employees are  displayed |
| Sort  by ID asc | employees   list are sorted by ID (1-> 2 ->3 ...) |
| Sort by  ID desc | employees   list are sorted by ID (3-> 2 ->1) |
| Sort by  first name asc | employees list are sorted by first name (a-> b ->c ...) |
| Sort by  first name desc | employees list are sorted by first name (c-> b->a) |
| Sort by  Last name asc | employees list are sorted by Last name (a-> b ->c ...) |
| Sort by  Last name desc | employees list are sorted by Last name (c-> b ->a) |
| Sort by  Emaill Address asc | employees list are sorted by  Emaill Address (a-> b ->c ...) |
| Sort by  Emaill Address desc | employees list are sorted by  Emaill Address (c-> b ->a) |
| Sort by  Role asc | employees list are sorted by  Role (a-> b ->c ...) |
| Sort by  Role desc | employees list are sorted by  Role (c-> b ->a) |
| Sort by Active status asc | employees list are sorted by  active status 'NO'–> 'YES' |
| Sort by Active status desc | employees list are sorted by  active status 'YES'–> 'NO' |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
