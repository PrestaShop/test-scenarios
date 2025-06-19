---
title: "BO - Modules - Alerts tab - Uninstall"
weight: 2
---

# BO - Modules - Alerts tab - Uninstall
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-889
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/02_alerts/03_installUninstallModule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/modules

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manager>Alerts | The module notifications  page should be displayed . |
| Choose one of the modules to configure ->Click on uninstall" and confirm the uninstall message by clicking on "Yes uninstall it " | A message should be displayed in green : "Uninstall action on module ps_checkpayment succeeded." |
