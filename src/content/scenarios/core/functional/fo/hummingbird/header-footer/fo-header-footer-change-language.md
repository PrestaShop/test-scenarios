---
title: "FO - Header & Footer - Change language"
weight: 4
---

# FO - Header & Footer - Change language
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4972

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: Disable french language <br><br>Go to FO | You will not see the link to change language in the header |
| *Case 2: Enable french language<br><br>Go to FO > Change language from EN to XX language from the list in the header | The page changed to XX language<br><br>The url has the /xx/ |
| Switch back to EN | FO is now in English<br><br>URL has /en/ at the end |
