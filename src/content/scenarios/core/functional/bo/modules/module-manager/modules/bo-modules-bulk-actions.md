---
title: "BO - Modules - Bulk actions"
weight: 7
---

# BO - Modules - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-880
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/01_modules/07_bulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO > Go to modules manager page | The page title should contains 'Module manager' |
| Check that the Bulk action section is *Disabled* |  |
| Select module form the displayed modules list | Check that the bulk actions is enabled |
| Click on the bulk actions section > and check that the : i<br>nstall / uninstall / disable / enable / reset / enable mobile / disable mobile , options are exists | The options list of the section bulk actions is well checked ! |
| Choose an aoption from the displayed list > confirm the displayed pop-up<br><br>Examle : click on *Disable* action | A success messages contains "Disable action on module "  .. should be appear |