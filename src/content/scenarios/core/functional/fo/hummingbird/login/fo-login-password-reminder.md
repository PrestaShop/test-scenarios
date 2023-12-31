---
title: "FO - Login - Password reminder"
weight: 1
---

# FO - Login - Password reminder
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4957
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/01_login/01_passwordReminder.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on "Sign In" button link on header on top right | "Sign in" page is displayed |
| Click on "Forgot your password?" link | "Forgot your password" page is displayed |
| Enter your customer email address > Click on "send reset link" | Message "If this email address has been registered in our store, you will receive a link to reset your password at  XX@XX.XX." is displayed |
| Check your emails > A "Password query confirmation" email is sent > Click on the link | "Reset your password" page is displayed |
| Fill the form > Click "Change Password" button | * You are logged into your account<br> * Success message "Your password has been successfully reset and a confirmation has been sent to your email address: XX@XX.XX" is displayed |
| Click on the Customer name on the header, then scroll down on the select to click on "Sign out" link. Or click on "Sign out" at the buttom of "My account" menu. | "Log in to your account" page is displayed |
| Click on "Forgot your password?" button link > Enter your customer email address > Click on "send reset link" button | An error message is displayed : "You can regenerate your password only every 360 minute(s)" |