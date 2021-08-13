---
title: "CRUD Employee (TODO)"
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
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
