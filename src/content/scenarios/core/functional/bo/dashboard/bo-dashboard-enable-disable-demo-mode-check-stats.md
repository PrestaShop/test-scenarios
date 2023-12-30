---
title: "BO - Dashboard - Enable/Disable demo mode + check stats"
weight: 1
---

# BO - Dashboard - Enable/Disable demo mode + check stats
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-718
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/01_dashboard/01_enableDisableDemoMode.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Dashboard page | The dashboard page is displayed |
| Enable Demo mode | Demo mode is enabled and fake stats are generated. |
| Disable Demo mode | Demo mode is disabled, fake stats are no longer displayed and real states are displayed |