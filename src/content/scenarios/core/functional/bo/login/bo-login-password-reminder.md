---
title: "BO  - Login- Password reminder"
weight: 2
---

# BO  - Login- Password reminder
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-716
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/00_login/01_passwordReminder.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/prestashop-authentication-window

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Advanced Parameters -> Team -> Employees page and click on "Add new employee" | Employees page is displayed and "Add new employee" page is displayed |
| Set these fields:<br> # First name<br> # Last name<br> # Email address<br> # Password<br><br> <br><br>and save | A green alert "Successful creation." is displayed and the Employees list page is displayed |
| Click on the employee icon | A drop-down menu for the employee is opened |
| Click on "Sign out" | The login page is displayed |
| Click on forgot my password" link" | Redirected to reminder page |
| Enter existing account email address | The email field is not empty anymore |
| Click on send reset link" | a confirmation message is displayed |
| Chek in mail box | the mail is arrived |
| click on the link in the mail box | redirected to reset password page |
| Set and confirm a new password | Confirmation message is displayed then redirection to login page |
| try to login with the old | login is refused |
| Try to login with new password | login is accepted and redirection to the Dashboard page |
