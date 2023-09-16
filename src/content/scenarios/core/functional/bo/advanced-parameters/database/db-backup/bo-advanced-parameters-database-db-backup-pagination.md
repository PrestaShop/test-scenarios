---
title: "BO - Advanced Parameters - Database - DB Backup - Pagination"
weight: 3
---

# BO - Advanced Parameters - Database - DB Backup - Pagination
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1171

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Database > DB Backup > Click on the button "I have read the disclaimer. Please create a new backup." 1O times | Alert "It appears the backup was successful, however you must download and carefully verify the backup file before proceeding." is displayed<br><br>All backups are displayed |
| Click on the button "I have read the disclaimer. Please create a new backup." one more time. | Alert "It appears the backup was successful, however you must download and carefully verify the backup file before proceeding." is displayed<br><br>See that the pagination system is displayed |
| Scroll down to DB Backups block | See that you have 11 backups available |
| Change pagination to 10 | 2 pages are available |
| Change pagination to 20 | 1 page is available |
| Change pagination to 50 | 1 page is available |
| Change pagination to 100 | 1 page is available |
