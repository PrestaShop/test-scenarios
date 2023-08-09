---
title: "BO - International - Localization - Languages - Bulk actions"
weight: 3
---

# BO - International - Localization - Languages - Bulk actions
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-995

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International -> Localization -> languages page | page title contains 'Languages' |
| Reset filters | Total of products > 0 |
| Go to add new language page | Page title contains 'Add new' |
| Create new language : | Successful message is displayed<br>number of languages = total of languages + 1 |
| Go to add new language page | Page title contains 'Add new' |
| Create new language : | Successful message is displayed<br>number of languages = total of languages + 2 |
| filter languages by name 'languageToDelete' | 2 languages created are in list |
| disable languages by bulk actions | All languages are disabled |
| enable languages by bulk actions | All languages are enabled |
| delete languages by bulk actions | All languages are deleted |
| reset filters | number of languages = total of languages |
