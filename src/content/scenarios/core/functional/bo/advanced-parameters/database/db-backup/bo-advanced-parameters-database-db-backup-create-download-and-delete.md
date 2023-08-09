---
title: "BO - Advanced Parameters - Database - DB Backup - Create, Download and Delete"
weight: 1
---

# BO - Advanced Parameters - Database - DB Backup - Create, Download and Delete
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1169

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to database > sql manager page | title contains 'SQL Manager' |
| go to db backup page | title contains 'DB Backup' |
| get number of db backups | number of backups = 0 |
| Click on "I have read the disclaimer , Please create a new backup " | Successful message is displayed ="<br>It appears the backup was successful, however you must download and carefully verify the backup file before proceeding.<br> "<br><br>number of backups = 1 |
| get name of backup generated and Download it (by clicking on it) | File with correct name exist in your download directory |
| delete backup from table (with drop down button) | successful message is displayed "Successful deletion"<br><br><br>number of backups = 0 |
