---
title: "ps_supplierlist - Configure Settings"
weight: 1
---

# ps_supplierlist - Configure Settings
## Details
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7274
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/34_ps_supplierlist/01_configure/01_configureSettings.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Modules> Module Manager | Module Manager page is well displayed |
| Search _supplierlist_ module | Supplier list module is displayed in _Design & Navigation_ result |
| Click on Configure module button | Configure / Supplier list page is well displayed |
| Edit type of display,<br><br>save. | The settings have been updated. message is displayed |
| Go to FO> All products | The search filter suppliers is displayed with a drop-down list on the left column. |
| Go back to the Configure / Supplier list page | Configure / Supplier list page is well displayed |
| Edit type of display,<br><br>save. | The settings have been updated. message is displayed |
| Go to FO> All products | The search filter suppliers is displayed with a plain-text list list on the left column. |
