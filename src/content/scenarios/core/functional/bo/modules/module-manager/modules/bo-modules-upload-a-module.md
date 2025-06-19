---
title: "BO - Modules - Upload a module"
weight: 8
---

# BO - Modules - Upload a module
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-881
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/01_modules/08_uploadModule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/modules

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO > Go to modules manager page | * The page title should contains 'Module manager'<br>Check that the button *upload module* exist in the header of the page |
| Click on the button Upload module | A pop-up contains *'Drop your module archive here or select file*' appears |
| Case 1 : Drop the module you want to install <br><br>Case 2 : Select the file of the module you want to install | The installing process begins > a sucess message should appears |
| Check that the module is well installed and exist in the list of modules |  |
