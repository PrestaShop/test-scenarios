---
title: "BO - Advanced Parameters - Logs - Logs by email"
weight: 2
---

# BO - Advanced Parameters - Logs - Logs by email
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1175
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/08_logs/02_logsByEmail.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Advanced Parameters>Logs | Page title contains 'Logs' |
| Click to droplist Minimum severity level | * None<br> * Informative only<br> * Warning<br> * Error<br> * Major issus (crash)! |
| Add a invalid email to "Send emails to" and Save | Invalid email: demo@prestashop.. |
| Add a valid email to "Send emails to" and Save | Successful update |
