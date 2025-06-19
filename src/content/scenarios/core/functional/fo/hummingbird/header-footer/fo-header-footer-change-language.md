---
title: "FO - Header & Footer - Change language"
weight: 4
---

# FO - Header & Footer - Change language
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4972
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/02_headerAndFooter/04_changeLanguage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: Disable french language <br><br>Go to FO | You will not see the link to change language in the header |
| *Case 2: Enable french language<br><br>Go to FO > Change language from EN to XX language from the list in the header | The page changed to XX language<br><br>The url has the /xx/ |
| Switch back to EN | FO is now in English<br><br>URL has /en/ at the end |
