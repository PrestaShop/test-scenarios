---
title: "FO - User account - Edit informations"
weight: 1
---

# FO - User account - Edit informations
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4974
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/01_editInformation.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go to header and click on "Sign in" link | Log in to your account page is displayed. |
| Fill the login form with your login credentials > Click on the "Sign in" button | Home page is displayed |
| Go to header and click on your username > Click on "Information" tab | "Your personal information" page is displayed |
| *Case 1: Update password with your current password and empty "New password" field*<br>Modify the Social title, First name, Last name and Email > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * New informations is saved<br> * Success message "Information successfully updated." is displayed |
| *Case 2: Update password with wrong current password and empty "New password" field*<br>Modify your password  > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "Email/Password" fields: error message "Invalid email/password combination" is displayed |
| *Case 3: Update password with same letters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed in top of the page.<br> * Below "New password" field, error messages are displayed:<br> ** There are 3 errors:<br><br> ### Repeats like "abcabcabc" are only slightly harder to guess than "abc"<br> ### Add another word or two. Uncommon words are better.<br> ### Avoid repeated words and characters |
| *Case 4: Update password with a password above or equal to 5 and below 8 characters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 3 errors:<br><br> ## Password must be between 8 and 72 characters long<br> ## The minimum score must be: Strong<br> ## Add another word or two. Uncommon words are better. |
| *Case 5: Update password with an old similar password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 2 errors:<br><br> ## This is similar to a commonly used password<br> ## Add another word or two. Uncommon words are better. |
| *Case 6: Update password with simple characters on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 2 errors:<br><br> ## The minimum score must be: Strong<br> ## Add another word or two. Uncommon words are better. |
| *Case 7: Update password with common password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 2 errors:<br><br> ## This is a very common password<br> ## Add another word or two. Uncommon words are better. |
| *Case 8: Update password with Top 10 common password on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 2 errors:<br><br> ## This is a top-10 common password<br> ## Add another word or two. Uncommon words are better. |
| *Case 9: Update password with the same character on "New password" field*<br>Modify your password > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed: <br><br>There are 3 errors:<br><br> ## Repeats like "aaa" are easy to guess<br> ## Add another word or two. Uncommon words are better.<br> ## Avoid repeated words and characters |
| *Case 10: Update your password with good informations*<br>Re-enter your current password and your new password to the form | * Success message "Information successfully updated." is displayed<br> * Your password has been updated |
| Check all checkboxes > Save | * Success message "Information successfully updated." is displayed<br> * See that checkboxes for partners offer and newsletter are checked |