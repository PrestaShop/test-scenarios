---
title: "BO - Advanced Parameters - Database - SQL Manager - Export"
weight: 2
---

# BO - Advanced Parameters - Database - SQL Manager - Export
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1164
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/07_database/sqlManager/03_exportSqlQuery.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/database/sql-manager

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Database > Add new SQL query > Save | Message Successful creation is displayed |
| Click on the export button | The .csv file is dowloaded and is called "request_sql_1" |
| Click on the parameter wheel button on the top right > Click on "Export to SQL Manager" | New SQL query page is displayed |
| Click on Save | Message Successful creation is displayed |
| Click on the export button | The .csv file is dowloaded and is called "request_sql_2" |
