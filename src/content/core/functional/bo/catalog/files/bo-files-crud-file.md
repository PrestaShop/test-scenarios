---
title: "BO - Files - CRUD File"
weight: 1
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog> Files page | Title contains 'Files' |
| Click on "Create New File" | Title contains 'Add new file' |
| Set these fields:<br> # name: system.fileName from faker<br> # frName: same as name<br> # description: lorem.sentence from faker<br> # frDescription: same as description<br> # filename: name + '.text' and click on "Save" | The successful message "Successful creation." is displayed |
| Click on the dropdown | A dropdown list is displayed |
| View file | File should be downloaded<br>name of file is correct |
| Click on edit File | title contains 'Edit:' |
| Set these fields:<br> # name: system.fileName from faker<br> # frName: same as name<br> # description: lorem.sentence from faker<br> # frDescription: same as description<br> # filename: name + '.text' and click on "Save" | The successful message "Successful update." is displayed |
| Click on the dropdown | A dropdown list is displayed |
| View file | File should be downloaded<br>name of file is correct |
| Delete the file and confirm the deletion | successful message "Successful deletion." is displayed |
