---
title: "BO - Advanced Parameters - Database - SQL Manager - Settings"
weight: 3
---

# BO - Advanced Parameters - Database - SQL Manager - Settings
## Details
* **Component** : Core
* **Status** : Blocked
* **Scenario** : https://forge.prestashop.com/browse/TEST-1165

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