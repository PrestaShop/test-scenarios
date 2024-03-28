---
title: "BO - Shop Parameters - Customer Settings - Password reset delay"
weight: 3
---

# BO - Shop Parameters - Customer Settings - Password reset delay
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1085

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Customer settings | See *Password reset delay is set to 360 minutes. |
| Click View my store > Sign in > Forgot your password? > Enter your email address pub@prestashop.com > Click on SEND RESET LINK | See the success message : If this email address has been registered in our store, you will receive a link to reset your password at pub@prestashop.com.<br><br>Inn your emails, see that the email titled "Password query confirmation" is sent |
| Clic on the link in the mail next to : "In order to confirm this action, click on the following link: " | * You should be redirrected to the FO on "Reset Password"<br> * There are two field for the password : New Password and Confirmation with an eye next to it to view the password <br> * There is a change password button and an other one to "Back to Login" |
| * Set the "new password" field  <br> * Click on the "eye button" next to "new password" | * The "new password" shouldn't be empty and have many * into<br> * The "new password should be displayed |
| Clic on "Change Password" button | You should have this error message : <br> * The confirmation is empty: please fill in the password confirmation as well<br> * The minimum score must be: Strong |
| * Set the "new password" field <br> * Set the "Confirmation" field  <br> * Click on "Change password" button | * The "new password" shouldn't be empty and have many * into<br> * The "Confirmation" shouldn't be empty and have many * into<br> * You should be login into your account [pub@prestashop.com|mailto:pub@prestashop.com] and you have the green notification "Your password has been successfully reset and a confirmation has been sent to your email address: pub@prestashop.com" |
| Sign out from The FO | You should be logged out from the FO and you account should be connected |
| Click in Sign in > Forgot your password? > Enter your email address pub@prestashop.com > Click on SEND RESET LINK | You should see a red message : "You can regenerate your password only every 360 minute(s)" |
