---
title: "Bulk actions"
weight: 3
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to languages page | page title contains 'Languages' |
| Reset filters | Total of products > 0 |
| Go to add new language page | Page title contains 'Add new' |
| Create new language : <br>name: 'languageToDelete1', isoCode: 'fi' | Successful message is displayed<br>number of languages = total of languages + 1 |
| Go to add new language page | Page title contains 'Add new' |
| Create new language : <br>name: 'languageToDelete2', isoCode: 'ca' | Successful message is displayed<br>number of languages = total of languages + 2 |
| filter languages by name 'languageToDelete' | 2 languages created are in list |
| disable languages bu bulk actions | All languages are disabled |
| enable languages by bulk actions | All languages are enabled |
| delete languages by bulk actions | All languages are deleted |
| reset filters | number of languages = total of languages |
