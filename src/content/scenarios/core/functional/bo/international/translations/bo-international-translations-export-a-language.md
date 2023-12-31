---
title: "BO - International - Translations - Export a language"
weight: 3
---

# BO - International - Translations - Export a language
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1036
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/04_translations/03_exportLanguage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On Bo > International > Translation | The translation page should display correctly |
| Select on Update a language :English (English) <br><br> <br><br>Click to Add or update a language | The translations have been successfully added. |
| Select on Add a language : Brezhoneg (Breton) <br><br> <br><br>Click to Add or update a language | The translations have been successfully added. |
| Go to FO and check the new language | The new language is visible in FO |
| Go back to BO > On Modify translations<br><br>Select your language | Brezhoneg language should be added |
| Go to *Export a language* form and choose the language already added and check Export : Back office<br><br>Click on Export button | _translations_export.zip_ is downloaded |
| uncheck Export : Back office and check Front office and Other<br><br>Click on Export button | _translations_export.zip_ is downloaded |
| uncheck Export and check Installed module traslations : Link List<br><br>Click on Export button | _translations_export.zip_ is downloaded |