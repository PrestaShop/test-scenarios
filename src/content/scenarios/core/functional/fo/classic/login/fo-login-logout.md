---
title: "FO - Login - Logout"
weight: 2
---

# FO - Login - Logout
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1192
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/01_login/03_logout.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1*<br>Go to FO > you are logged in with default customer account p >  Click on "Sign out" button link on the header of the shop | * You are logged out<br> * Home page is displayed |
| *Case 2*<br>Go to header > Click on "Sign in" button link | The "Log in to your account" page is displayed |
| Fill the form with customer account created from the pre-condition step informations > Click "Sign in" button | * You are logged in<br> * Home page is displayed |
| Go to header > Click on "Your name" button link | "Your account" page is displayed |
| Click on "Sign out" link on the bottom of your account page | * You are logged out<br> * Log in to your account page is displayed |
