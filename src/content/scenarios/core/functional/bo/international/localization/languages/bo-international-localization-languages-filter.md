---
title: "BO - International - Localization - Languages - Filter"
weight: 1
---

# BO - International - Localization - Languages - Filter
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-993
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/02_languages/01_filterAndQuickEditLanguages.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/languages

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization page > Languages tab | Page is well displayed and title contains 'Languages' |
| In Enabled column, disable the language of ID = 2 | The status has been successfully updated. |
| Filter by ID = 1 | Number of languages after reset < Total of languages <br>All rows column ID contains '1' |
| Reset filter | Number of languages = Total of languages |
| Filter by Name = 'English (English)' | Number of languages after reset < Total of languages <br>All rows column Name contains 'English (English)' |
| Reset filter | Number of languages = Total of languages |
| Filter by ISO code = 'en' | Number of languages after reset < Total of languages <br>All rows column ISO code contains 'en' |
| Reset filter | Number of languages = Total of languages |
| Filter by Language code = 'en-us' | Number of languages after reset < Total of languages <br>All rows column Language code contains 'en-us' |
| Reset filter | Number of languages = Total of languages |
| Filter by Locale = 'en-US' | Number of languages after reset < Total of languages <br>All rows column Language code contains 'en-US' |
| Reset filter | Number of languages = Total of languages |
| Filter by Date format = 'm/d/Y' | Number of languages after reset < Total of languages <br>All rows column Date format contains 'm/d/Y' |
| Reset filter | Number of languages = Total of languages |
| Filter by Data format (full) = 'm/d/Y H:i:s' | Number of languages after reset < Total of languages <br>All rows column Date format (full) contains 'm/d/Y H:i:s' |
| Reset filter | Number of languages = Total of languages |
| Filter by Enabled = 'yes' | Language English is displayed |
| Reset filter | Number of languages = Total of languages |
| Edit French language > Status = YES > Save | Successful update message is displayed |
| Filter by Enabled = 'yes' | All languages are displayed : French and English |
| Reset filter | Number of languages = Total of languages |
