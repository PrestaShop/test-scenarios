---
title: "BO - Advanced Parameters - Logs - Logs by email"
weight: 2
---

# BO - Advanced Parameters - Logs - Logs by email
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1175

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Advanced Parameters>Logs | Page title contains 'Logs' |
| Click to droplist Minimum severity level | * None<br> * Informative only<br> * Warning<br> * Error<br> * Major issus (crash)! |
| Add a invalid email to "Send emails to" and Save | Invalid email: demo@prestashop.. |
| Add a valid email to "Send emails to" and Save | Successful update |
