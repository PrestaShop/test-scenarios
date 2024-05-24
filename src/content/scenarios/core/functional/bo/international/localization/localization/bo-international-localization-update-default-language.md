---
title: "BO - International - Localization - Update default language"
weight: 5
---

# BO - International - Localization - Update default language
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-989
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/01_localization/05_updateDefaultLanguage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/localization

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization page | Page is well displayed and title contains 'Localization' |
| Localization pack you want to import > Choose 'Chile' > Import | Successful message "Localization pack imported successfully." is displayed |
| On configurate form, click on Default language | Spanich language is added |
| Click on spanich language and save | Update successful message is displayed |
| On configurate form > Default language > click on English > Save | Update successful message is displayed |
