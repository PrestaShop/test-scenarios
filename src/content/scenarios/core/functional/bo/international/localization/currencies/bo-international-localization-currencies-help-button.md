---
title: "BO - International - Localization - Currencies - Help button"
weight: 6
---

# BO - International - Localization - Currencies - Help button
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1005
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/03_currencies/03_helpButton.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/currencies

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies page | The Currencies page is well displayed |
| Click on Help | The documentation modal is opened in English |
| Close the modal | The modal is well closed |
