---
title: "BO - Modules - Alerts tab - Disable / Enable mobile"
weight: 1
---

# BO - Modules - Alerts tab - Disable / Enable mobile
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-887
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/02_alerts/01_enableDisableMobile.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manager>alerts | The module notifications page should be displayed . |
| Choose one of the modules to configure-> Click on  action : Disable mobile | A message should be displayed in green : <br><br>"Disable mobile action on module ps_checkpayment succeeded." |
| Choose one of the modules to configure->Click on action : Enable mobile | A message should be displayed in green :<br><br>"Enable mobile action on module ps_checkpayment succeeded." |
