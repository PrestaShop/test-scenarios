---
title: "BO - Advanced Parameters - Database - DB Backup - Pagination , Bulk Delete"
weight: 2
---

# BO - Advanced Parameters - Database - DB Backup - Pagination , Bulk Delete
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to database > sql manager page | title contains 'SQL Manager' |
| go to db backup page | title contains 'DB Backup' |
| get number of db backups | number of backups = 0 |
| Click on "I have read the declaimer .Please generate new db backup " | Successful message is displayed<br>number of backups = 1 |
| generate new db backup | Successful message is displayed<br>number of backups = 2 |
| Select all backups and delete them with bulk actions | Successful message is displayed<br>number of backups = 0 |
| go to database > sql manager page | title contains 'SQL Manager' |
| go to db backup page | title contains 'DB Backup' |
| get number of db backups | number of backups = 0 |
| Click on "I have read the disclaimer , Please create a new backup " | Successful message is displayed ="<br>It appears the backup was successful, however you must download and carefully verify the backup file before proceeding.<br> "<br><br>number of backups = 1 |
| get name of backup generated and Download it (by clicking on it) | File with correct name exist in your download directory |
| delete backup from table (with drop down button) | successful message is displayed "Successful deletion"<br><br><br>number of backups = 0 |
| generate 20 new db backup | Successful message is displayed<br>number of backups = 20 |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
