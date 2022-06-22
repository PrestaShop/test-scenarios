---
title: "FO - Edit informations"
weight: 1
---

# FO - Edit informations
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go to header and click on "Sign in" link | Login page is displayed |
| Fill the login form with your logins > Click on the "Sign in" button | Home page is displayed |
| Go to header and click on your username > Click on "Information" tab | "Your personal information" page is displayed |
| Modify the Social title, First name, Last name and email > Click on "save" button | You need to:<br> * re-enter your password<br> * check "I agree to the terms and conditions and the privacy policy" checkbox<br> * check "Customer data privacy" checkbox |
| Click on "Save" button | * New informations is saved<br> * Success message "Information successfully updated." is displayed |
| *Case 1: Update password with empty "New password" field*<br>Modify your password  > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "Email/Password" fields: error message "Invalid email/password combination" is displayed |
| *Case 2: Update password with same letters on "New password" field*<br>Modify your password > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** Repeats like "abcabcabc" are only slightly harder to guess than "abc"<br> ** Add another word or two. Uncommon words are better.<br> ** Avoid repeated words and characters |
| *Case 3: Update password with a password below 8 characters or above 72 characters on "New password" field*<br>Modify your password > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** Password must be between 8 and 72 characters long<br> ** Add another word or two. Uncommon words are better. |
| *Case 4: Update password with an old similar password on "New password" field*<br>Modify your password > Check "I agree to the terms and conditions and the privacy policy" &  "Customer data privacy" checkboxes > Click on "Save" button | * Error message "Could not update your information, please check your data." is displayed<br> * Below "New password" field, error messages are displayed:<br> ** This is similar to a commonly used password<br> ** Add another word or two. Uncommon words are better. |
| Re-enter your current password and your new password to the form | * Success message "Information successfully updated." is displayed<br> * Your password has been updated |
| Check all checkboxes > Save | * Success message "Information successfully updated." is displayed<br> * See that checkboxes for partners offer and newsletter are checked |
