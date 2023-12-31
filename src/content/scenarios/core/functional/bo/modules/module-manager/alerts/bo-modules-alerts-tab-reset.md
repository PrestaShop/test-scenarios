---
title: "BO - Modules - Alerts tab - Reset"
weight: 2
---

# BO - Modules - Alerts tab - Reset
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-888
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/02_alerts/02_resetModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manager>alerts | The module notifications page should be displayed |
| Choose one of the modules to configure ->Click on action REST and confirm the REST  message by clicking on "Yes ,rest it " | A message should be displayed in green : "Reset action on module ps_checkpayment succeeded." |
