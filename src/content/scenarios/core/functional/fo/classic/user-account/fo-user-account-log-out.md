---
title: "FO - User account - Log out"
weight: 7
---

# FO - User account - Log out
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1205
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/07_logOut.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | Home page is displayed |
| Go to your account by clicking on your username link in the header | Your account page is displayed with:<br> * All your account tabs<br> * A link "Sign out"  displayed at the bottom of your account page |
| Click on "Sign out" link at the bottom of your account page | * You are log out of your account<br> * "Log in to your account" page is displayed |
