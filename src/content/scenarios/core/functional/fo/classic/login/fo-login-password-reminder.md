---
title: "FO - Login - Password reminder"
weight: 3
---

# FO - Login - Password reminder
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1193
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/01_login/01_passwordReminder.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on "Sign In" button link on header on top right > Click on "Forgot your password?" link | "Forgot your password" page is displayed |
| Enter your customer email address > Click on "send reset link" | Message "If this email address has been registered in our shop, you will receive a link to reset your password at XX@XX.XX." is displayed |
| Check your emails > A "Password query confirmation" email is sent > Click on the link | "Reset your password" page is displayed |
| Fille the form > Click "Change password" button | * You are logged into your account<br> * Success message "Your password has been successfully reset and a confirmation has been sent to your email address: XX@XX.XX" is displayed |
| Click on "Sign out" button link on the header or at the bottom of "Your account" page | "Log in to your account" page is displayed |
| Click on "Forgot your password?" button link > Enter your customer email address > Click on "send reset link" button | An error message is displayed : "You can regenerate your password only every 360 minute(s)" |
