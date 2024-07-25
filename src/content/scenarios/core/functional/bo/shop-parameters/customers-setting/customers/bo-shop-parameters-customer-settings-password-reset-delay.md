---
title: "BO - Shop Parameters - Customer Settings - Password reset delay"
weight: 3
---

# BO - Shop Parameters - Customer Settings - Password reset delay
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1085

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Customer settings | See Password reset delay is set to 360 minutes. |
| Click View my store > Sign in > Forgot your password? > Enter your email address pub@prestashop.com > Click on SEND RESET LINK | See the success message : If this email address has been registered in our store, you will receive a link to reset your password at pub@prestashop.com.<br><br>In your emails, see that the email titled "Password query confirmation" is sent |
| Click on the link in the mail | You are redirected to the FO on "Reset Password" page<br>There are two field for the password : New Password and Confirmation |
| Set the "new password" field > Click on "Change Password" button | The confirmation is empty: please fill in the password confirmation as well |
| Set the "New password" field > Set the "Confirmation" field > Click on "Change password" button | You are now logged into your account pub@prestashop.com<br>The green alert is displayed "Your password has been successfully reset and a confirmation has been sent to your email address: pub@prestashop.com" |
| Sign out from the FO | You are logged out from your customer account |
| Click in Sign in > Forgot your password? > Enter your email address pub@prestashop.com > Click on SEND RESET LINK | You should see a red message : "You can regenerate your password only every 360 minute(s)" |
