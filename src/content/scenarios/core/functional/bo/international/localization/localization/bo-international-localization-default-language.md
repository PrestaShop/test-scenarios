---
title: "BO - International - Localization - Default language"
weight: 2
---

# BO - International - Localization - Default language
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-986
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/01_localization/02_defaultLanguage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> International> Localization | Localization page is well displayed |
| Go to *Import a localization pack* tab> choose a localization pack to import,<br><br>Import | Update successful message is displayed. |
| Go to *Configuration* tab> click on dropdown Default language | The arabic language is added |
| Go to FO> header> click on language | The arabic language is well added |
| Click on arabic language | The arabic language is displayed |