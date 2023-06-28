---
title: "BO - Advanced parameters - Team - Employees - Sort pagination"
weight: 4
---

# BO - Advanced parameters - Team - Employees - Sort pagination
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
| Go back to BO > Edit your profile by clicking on the pen > Edit your profile picture and your Default page | Profile is updated<br><br>Message Successful update. appears |
| Click on the top right icon > Click on Your Profile | See that the profile picture and the default page is updated |
| Go back to Employees list > Click 3 dots on newly created Employee > Click delete > Delete | Employee is deleted.<br><br>Message Successful deletion. appears |
| Log in with deleted Employee | Error message appears :<br><br>*There is one error.*<br> # The employee does not exist, or the password provided is incorrect. |
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
| Sort by   Profile asc | employees list are sorted by  Profile (a-> b ->c ...) |
| Sort by   Profile desc | employees list are sorted by  Profile (c-> b ->a) |
| Sort by Active status asc | employees list are sorted by  active status 'NO'–> 'YES' |
| Sort by Active status desc | employees list are sorted by  active status 'YES'–> 'NO' |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
