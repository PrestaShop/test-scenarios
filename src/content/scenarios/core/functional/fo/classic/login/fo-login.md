---
title: "FO - Login"
weight: 4
---

# FO - Login
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1194
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/01_login/02_login.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on "Sign In" link button > Enter a wrong email + password combination > Click on "Sign In" button | * An error message "Authentication failed". is displayed<br> * You can't log in |
| Enter your email + password with demo account > Click on "Show" | Password is displayed clearly |
| Click on "Sign in" button | * You are now logged into your customer account<br> * Home page is displayed |
