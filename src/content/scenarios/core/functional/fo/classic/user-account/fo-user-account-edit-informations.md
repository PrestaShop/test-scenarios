---
title: "FO - User account - Edit informations"
weight: 1
---

# FO - User account - Edit informations
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1199
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/01_editInformation.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go to header and click on "Sign in" link | Login page is displayed |
| Fill the login form with your logins > Click on the "Sign in" button | Home page is displayed |
| Go to header and click on your username > Click on "Information" tab | "Your personal information" page is displayed |
| *Case 1: Update password with your current password and empty "New password" field*<br>Modify the Social title, First name, Last name and email > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * New informations is saved<br> * Success message "Information successfully updated." is displayed |
| *Case 2: Update password with wrong current password and empty "New password" field*<br>Modify your password  > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "Email/Password" fields: error message "Invalid email/password combination" is displayed |
| *Case 3: Update password with same letters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** "The minimum score must be: Strong" |
| *Case 4: Update password with a password above or equal to 5 and below 8 characters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** Password must be between 8 and 72 characters long<br> ** The minimum score must be: Strong |
| *Case 5: Update password with an old similar password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** The minimum score must be: Strong |
| *Case 6: Update password with simple characters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** The minimum score must be: Strong |
| *Case 7: Update password with common password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** The minimum score must be: Strong |
| *Case 8: Update password with Top 10 common password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** The minimum score must be: Strong |
| *Case 9: Update password with the same character on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** The minimum score must be: Strong |
| *Case 10: Update your password with good informations*<br>Re-enter your current password and your new password to the form | * Success message "Information successfully updated." is displayed<br> * Your password has been updated |
| Check all checkboxes > Save | * Success message "Information successfully updated." is displayed<br> * See that checkboxes for partners offer and newsletter are checked |
