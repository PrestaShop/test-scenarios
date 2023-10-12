---
title: "BO - Design - Email Theme - Configuration"
weight: 1
---

# BO - Design - Email Theme - Configuration
## Details
* **Component** : Core
* **Status** : In progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-936

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > E-mail page | Page title is 'E-mail' |
| Configure your email parameters in block Email > Save | The settings have been successfully updated. |
| Launch maildev in terminal | maildev is launched |
| In Test your email configuration block > Click Send an email test | A validation message is displayed<br>'A test email has been sent to the email address you provided.' |
| Go to BO > Design > Email Theme > Block configuration | See Default theme is set to "modern"<br><br>In Generate emails > Select your email theme > See modern |
| Go to Orders > Orders > Change status of order reference KHWLILZLL to Payment accepted | Successful update message is displayed |
| Check your email > Open Payment accepted email | The modern theme is applied |
| Go to BO > Design > Email Theme > Block configuration > Change your default theme to classic > Save | Email theme configuration saved successfully<br><br><br>In Generate emails > Select your email theme > See classic |
| Generate emails with the following info > Click on Generate emails | Successfully generated email templates for theme classic with locale en |
| Go to Orders > Orders > Change status of order reference KHWLILZLL to Delivered | Successful update message is displayed |
