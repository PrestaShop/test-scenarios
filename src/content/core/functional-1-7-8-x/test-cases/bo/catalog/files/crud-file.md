---
title: CRUD File
weight: 1
---

## Preconditions

PrestaShop installed\
Login with admin BO account\
Generate 2 test files
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to files page | Title contains 'Files' |
| Go to new file | Title contains 'Add new file' |
| Create file <br>Criteria : <br>name: system.fileName from faker<br>frName: same as name<br>description: lorem.sentence from faker<br>frDescription: same as description<br>filename: name + '.text' | successful message is displayed |
| View file | File should be downloaded<br>name of file is correct |
| go to edit file data | title contains 'Edit:' |
| edit file | successful message is displayed |
| View file | File should be downloaded<br>name of file is correct |
| delete file | successful message is displayed |
