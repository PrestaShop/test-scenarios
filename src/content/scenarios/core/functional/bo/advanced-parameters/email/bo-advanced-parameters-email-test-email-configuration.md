---
title: "BO - Advanced parameters - Email - Test email configuration"
weight: 3
---

# BO - Advanced parameters - Email - Test email configuration
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1146

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > E-mail page | Page title is 'E-mail' |
| Configure your email parameters in block Email > Save | The settings have been successfully updated. |
| Launch maildev in terminal | maildev is launched |
| In Test your email configuration block > Click Send an email test | A validation message is displayed<br>'A test email has been sent to the email address you provided.' |