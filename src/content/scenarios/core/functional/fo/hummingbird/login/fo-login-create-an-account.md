---
title: "FO - Login - Create an account"
weight: 4
---

# FO - Login - Create an account
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4955
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/01_login/04_createAccount.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on top right "Sign In" button link | "Log in to your account" page is displayed |
| Click on "Create your acccount" button at the bottom fo the block | Create an account page is displayed |
| Fill the form with your personal information > Click Save | * You are now logged into your account<br> * Redirection automatically to the homepage |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |
