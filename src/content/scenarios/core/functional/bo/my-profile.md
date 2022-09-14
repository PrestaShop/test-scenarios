---
title: "My Profile"
weight: 8
---

# My Profile
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Click top right user icon > Click on "Your Profile" button | Edit your profile page is displayed |
| Edit "First name" and "Last name" > Click on "Save" button | * Message "Successful update" is displayed<br> * "First name" & "Last name" fields have saved the new name<br> * The title of "Edit" page has changed by the new name: "Edit: World Hello" |
| Edit "First name" and "Last name" fields with invalid string (with number for example) > Click on "Save" button | * An error message '_The "First name" field is invalid.'_ is displayed<br> * "First name" & "Last name" fields have saved the datas with numbers |
| Edit "First name" without invalid characters > Click on "Save" button | * Message '_The "Last name" field is invalid.'_ is displayed<br> * "First name" field has saved the datas |
| Add avatar with svg extension > Click on "Save" button | An error message "An unexpected error occurred. [PrestaShop\PrestaShop\Core\Image\Uploader\Exception\UploadedImageConstraintException code 2]: Image format "svg", not recognized, allowed formats are: gif, jpg, jpeg, jpe, png, webp" is displayed |
| Add avatar with valid extension > Click on "Save" button | A successful message "Successful update" is displayed |
| *Case 1: your email account has a gravatar account*<br> Set to "Yes" the Enable gravatar" switch button > Click on "Save" button > Click on "Your profile button" | * A successful message "Successful update" is displayed<br> * The "Enable gravatar" switch button is set to "Yes" and is green<br> * Your gravatar image is displayed on "Your profile section" |
| *Case 2: your email account has not a gravatar account*<br> Set to "Yes" the Enable gravatar" switch button > Click on "Save" button > Click on "Your profile button" | * A successful message "Successful update" is displayed<br> * The "Enable gravatar" switch button is set to "Yes" and is green<br> * No image is displayed on "Your profile section" |
| Edit all the others fields > Click on "Save" button | A successful message "Successful update" is displayed |
| Click top-right icon > Logout | You are redirected to the BO login page |
| Log into your BO with new credentials | * You are redirected to the Delivery slips page<br> * Your language is FR |
| Go to Advanced Parameters > Team > Employees > Delete your account | An error message "You cannot disable or delete your own account."  is displayed |
