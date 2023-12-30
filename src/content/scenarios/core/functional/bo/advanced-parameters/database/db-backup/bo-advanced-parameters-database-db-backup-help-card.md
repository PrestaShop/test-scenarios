---
title: "BO - Advanced Parameters - Database - DB Backup - Help card"
weight: 5
---

# BO - Advanced Parameters - Database - DB Backup - Help card
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1173
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/07_database/dbBackup/03_helpCard.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| GO to BO > Advanced Parameters > Database > DB Backup | DB Backup page is well displayed |
| Click on *Help* button on top right corner | Help card is displayed from the right side of the page |
| *Case1*<br><br>Click on *{color:#4c9aff}x{color}* button in the Help card header<br><br>*Case 2*<br><br>Click any where in Profiles page<br><br>*Case 3* <br><br>Click on *Help* button | The Help card disappears |