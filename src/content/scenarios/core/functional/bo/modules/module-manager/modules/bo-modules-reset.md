---
title: "BO - Modules - Reset"
weight: 5
---

# BO - Modules - Reset
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-878
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/01_modules/05_resetModule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/modules

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO | Dashboarb page should be displayed |
| Go to modules manager page | The page title should contains 'Module manager' |
| Set the name of a module in the search bar > click on the search button | The searched module should be displayed  ( only one result should be exist contains the searched module name  ) |
| Click on the drop-down button > Click on *Reset* option >Confirm the displayed pop-up | A success message contains "Reset action"  should be appear |
