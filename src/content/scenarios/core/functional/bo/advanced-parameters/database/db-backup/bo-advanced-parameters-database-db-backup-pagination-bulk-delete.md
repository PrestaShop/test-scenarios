---
title: "BO - Advanced Parameters - Database - DB Backup - Pagination , Bulk Delete"
weight: 2
---

# BO - Advanced Parameters - Database - DB Backup - Pagination , Bulk Delete
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1170
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/07_database/dbBackup/02_paginationAndBulkDelete.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/database

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to database > sql manager page | title contains 'SQL Manager' |
| go to db backup page | title contains 'DB Backup' |
| get number of db backups | number of backups = 0 |
| generate 11 new db backup | Successful message is displayed<br>number of backups = 11 |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
| Select all backups and delete them with bulk actions | Successful message is displayed<br>number of backups = 0 |
