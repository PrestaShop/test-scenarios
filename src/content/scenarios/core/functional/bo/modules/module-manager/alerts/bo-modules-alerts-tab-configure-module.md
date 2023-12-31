---
title: "BO - Modules - Alerts tab - Configure module"
weight: 5
---

# BO - Modules - Alerts tab - Configure module
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-893
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/02_alerts/05_configureModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manager>Alerts | The module notifications  page should be displayed . |
| Choose one of the modules to configure ->click on Configure button | Configuration page should be displayed |
| Add a company name, an address and save | Information should be saved<br><br>"Setting updated" |
