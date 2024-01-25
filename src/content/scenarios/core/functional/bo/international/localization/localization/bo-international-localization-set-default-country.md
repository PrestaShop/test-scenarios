---
title: "BO - International - Localization - Set default country"
weight: 4
---

# BO - International - Localization - Set default country
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-988
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/01_localization/05_defaultCountry.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/localization

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> International> Localization | Localization page is well displayed |
| Go to Configuration part -> Default country | The default currency used in the shop is France. |
| Edit Default country,<br><br>save. | Update successful message is displayed |
| Go to FO>Footer Container | On STORE INFORMATION : the country is updated. |
