---
title: "BO - International - Localization - Languages - CRUD"
weight: 2
---

# BO - International - Localization - Languages - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-994
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/02_languages/02_CRUDLanguage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/languages/add-edit-new-language

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Languages tab | Page title contains 'Languages' |
| Click on Add new language button | Page title contains 'New language' |
| Fill all the fields with Faker data > Save | Message "Successful creation" is displayed<br><br>Number of languages = total of languages + 1 |
| Go to FO > Click on language dropdown | New language exists in list of languages |
| Go back to BO and Filter by Name of created language | Filter is successful, newly created language is displayed |
| Click on Edit on the filtered language | Page title contains 'Edit :' |
| Edit language and disable it | Message "Successful update" is displayed |
| Go to FO > Click on language dropdown | Language is not displayed in dropdown list |
| Go back to BO > Reset filter > Filter by the new name of updated language | Filter is successful, newly edited language is displayed |
| Delete language | Message "Successful deletion" is displayed<br><br>No records found |
| Reset filter | All languages are displayed<br>number of languages = total of languages |
