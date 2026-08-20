---
title: "BO - Advanced Parameters - Extra Properties - installation de l\'example module"
weight: 2
---

# BO - Advanced Parameters - Extra Properties - installation de l\'example module
## Details
* **Status** : À faire
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8572
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/03_CRUDShops.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In a terminal, Go to modules section | terminal is displayed with [yourpath/yourshop]/modules |
| Install example-modules with the command : <br>{code:java}<br>git clone https://github.com/PrestaShop/example-modules.git{code} | example -modules folder is displayed with other modules on the folder [yourshop]/modules |
| go to example-modules folder | 27 folder is displayed with 3 files |
| Copy the folder demoextrafield and paste it on modules folder | demoextrafield folder is displayed on modules folder |
| on the terminal, return on [yourshop] and launch the command <br>{code:java}<br>php ./bin/console prestashop:module install demoextrafield{code} | Terminal display : <br><br>Install action on module demoextrafield succeeded. |
| Go to BO > Advanced Parameters > Extra Properties | Tab is displayed with 14 properties in it |
