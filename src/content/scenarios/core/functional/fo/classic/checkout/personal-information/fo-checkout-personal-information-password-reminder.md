---
title: "FO - Checkout - Personal Information - Password reminder"
weight: 5
---

# FO - Checkout - Personal Information - Password reminder
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1301

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product > Add to cart > Proceed to checkout > Proceed to checkout | Step 1 of checkout process is displayed : Personal Information |
| Click on Sign in > Click on Forgot your password? | The Reset your password page is displayed |
| Enter email > Send reset link | Success alert is displayed :<br><br>_If this email address has been registered in our shop, you will receive a link to reset your password at [test@prestashop.com.|mailto:test@prestashop.com.]_<br><br>An email "Password query confirmation should be received |
| Open the Password query confirmation email > Click on the reset link | Reset your password page is displayed |
| Enter your New password + Confirmation > Click Change password | You are now logged into your account<br><br>Success message is displayed :  Your password has been successfully reset and a confirmation has been sent to your email address: pub@prestashop.com |
| Click on Sign out > Enter Email + your new Password > Click Sign In | You are now logged into your account |
