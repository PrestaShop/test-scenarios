---
title: "FO - Login - Logout"
weight: 3
---

# FO - Login - Logout
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4956
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/01_login/03_logout.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1*<br> # Go to FO > you are logged in with default customer account John Doe<br> # Click on your name on the header of the shop > a droplist will be displayed<br> # Scroll down and Click on "Sign out" button link | * You are logged out<br> * Home page is displayed |
| *Case 2*<br>Go to header > Click on "Sign in" button link | The "Log in to your account" page is displayed |
| Fill the form with customer account created from the pre-condition step informations > Click "Sign in" button | * You are logged in<br> * Home page is displayed |
| Go to header > Click on "Your name" button link | a droplist is displayed |
| Click on "Your account" button link | "Your account" page is displayed |
| Click on "Sign out" link on the bottom of your account-menu | * You are logged out<br> * Log in to your account page is displayed |