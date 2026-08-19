---
title: "BO - Advanced Parameters - Database - SQL Manager - Settings"
weight: 4
---

# BO - Advanced Parameters - Database - SQL Manager - Settings
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7852
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/database/sql-manager

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Product page | Product page is displayed |
| Create a product | Product is created |
| Go to 'Sql manager' page | Page is displayed |
| Create a new sql query : | Query selected |
| Change default file encoding to '{color:#222222}iso-8859-1{color}' | Value changed<br><br>Successful message is displayed |
| Download and open CSV file of the created query | File downloaded<br><br>name of the product is '???' |
| Change default file encoding to '{color:#222222}utf-8{color}' | Value changed<br><br>Successful message is displayed |
| Download and open CSV file of the created query | File downloaded<br><br>name of the product is '{color:#e8912d}テスト{color}' |
