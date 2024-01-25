---
title: "BO - International - Translations - Add or update languages"
weight: 2
---

# BO - International - Translations - Add or update languages
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1035
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/04_translations/02_addUpdateLanguage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/translation

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On Bo > International > Translation | The translation page should display correctly |
| Select on Update a language :English (English) <br><br> <br><br>Click to Add or update a language | The translations have been successfully added. |
| Select on Add a language : Brezhoneg (Breton) <br><br> <br><br>Click to Add or update a language | The translations have been successfully added. |
| Go to FO and check the new language | The new language is visible in FO |
| Go back to BO > On Modify translations<br><br>Select your language | Brezhoneg language should be added |
