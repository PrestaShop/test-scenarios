---
title: "BO - Modules - Filter by status"
weight: 1
---

# BO - Modules - Filter by status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-874
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/01_modules/01_filterModulesByStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/modules

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO | Dashboarb page should be displayed |
| Go to modules manager page | The page title should contains 'Module manager' |
| Click on the section Status and select the filter modules by status : *enabled modules* | all the displayed modules should should be  *enabled* |
| Click on the section Status and select the filter modules by status : *disabled modules* | all the displayed modules should be *disabled* |
| Click on the section Status and select the filter modules by status : *installed modules* | All the installed module should be displayed |
| Choose a module and click on the dropDown button and choose the action uninstall | A success message should be appear |
| Click on the section Status and select the filter modules by status : *Uninstalled modules* | The displayed page should contains the uninstalled chosen module and the button *install* should be exist |
| Click on the section Status and select the filter modules by status : *Show all modules* | The displayed result should contain all the modules with different  status : installed / disabled / enabled / and uninstalled |
