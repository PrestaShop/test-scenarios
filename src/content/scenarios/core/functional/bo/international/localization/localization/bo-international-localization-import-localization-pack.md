---
title: "BO - International - Localization - Import localization pack"
weight: 1
---

# BO - International - Localization - Import localization pack
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-985
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/01_localization/01_importLocalizationPack.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/localization

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization page | Page is well displayed and title contains 'Localization' |
| Localization pack you want to import > Choose 'Chile' > Import | Successful message "Localization pack imported successfully." is displayed |
| Go to FO | FO is well displayed |
| Change the language to Español | Spanish language exists and FO is in Spanish |
| Change currency to Peso | Currency Peso exists and currency is changed to CLP |
| Go back to BO > International > Localization > Languages page | Page is well displayed and title contains 'Languages' |
| Filter languages by name 'Español (Spanish)' | First element of list contains 'Español (Spanish)' |
| Delete language | Alert "Successful deletion" is displayed. |
| Go to Currencies tab | Page is well displayed and title contains 'Currencies' |
| Filter by ISO code 'CLP' | First element of list contains 'CLP' |
| Delete currency 'CLP' | Alert "Successful deletion" is displayed |
| Reset filter | All currencies are displayed but CLP |
