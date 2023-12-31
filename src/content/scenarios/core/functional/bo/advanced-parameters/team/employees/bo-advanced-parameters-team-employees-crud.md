---
title: "BO - Advanced parameters - Team - Employees - CRUD"
weight: 2
---

# BO - Advanced parameters - Team - Employees - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1151
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/employees/02_CRUDEmployee.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
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