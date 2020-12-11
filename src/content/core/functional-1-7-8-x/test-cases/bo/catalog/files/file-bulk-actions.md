---
title: File Bulk Actions
weight: 2
---

## Preconditions

PresraShop installed\
Login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Catalog > Files' page | Title contains 'Files' |
| reset filters | Total of files >= 0 |
| go to add new file page | Title contains 'Add new file' |
| create file<br>(data from faker) | successful message is displayed<br>number of files = total of files + 1 |
| go to add new file page | Title contains 'Add new file' |
| create file<br>(data from faker) | successful message is displayed<br>number of files = total of files + 2 |
| filter by name 'todelete' | number of files = 2<br>all rows column name contains 'todelete' |
| delete files by bulk actions | Successful message is displayed |
| reset filter | number of files = total of files |
