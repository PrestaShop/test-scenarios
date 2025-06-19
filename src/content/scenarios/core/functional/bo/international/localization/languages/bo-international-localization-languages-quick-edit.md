---
title: "BO - International - Localization - Languages - Quick edit"
weight: 5
---

# BO - International - Localization - Languages - Quick edit
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-997

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International> Localization> Languages tab | Languages page is displayed |
| Go to Enabled column> disabled the language of ID = 1 | You cannot change the status of the default language. |
| Go to Enabled column> disabled the language of ID = 2 | The status has been successfully updated.<br> <br>Only English is displayed |
| Eabled the language of ID = 2 | The status has been successfully updated. |
