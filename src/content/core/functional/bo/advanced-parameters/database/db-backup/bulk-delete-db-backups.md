---
title: "Bulk Delete Db Backups"
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to database > sql manager page | title contains 'SQL Manager' |
| go to db backup page | title contains 'DB Backup' |
| get number of db backups | number of backups = 0 |
| generate new db backup | Successful message is displayed<br>number of backups = 1 |
| generate new db backup | Successful message is displayed<br>number of backups = 2 |
| Select all backups and delete them with bulk actions | Successful message is displayed<br>number of backups = 0 |
