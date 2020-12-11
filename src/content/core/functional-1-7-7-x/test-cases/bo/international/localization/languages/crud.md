---
title: CRUD
weight: 2
---

## Preconditions

PrestaShop installed\
Login with admin Bo account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to languages page | Page title contains 'Languages' |
| reset filters | Total of languages > 0 |
| go to add new language page | page title contains 'Add new' |
| Create new languages<br>(iso code : de, other data from faker) | Successful message is displayed<br>number of languages = total of languages + 1 |
| go to FO | New language exist in list of languages |
| go back to BO and filter by name of created language | First element in list is the language created |
| go to edit language page | page title contains 'Edit :' |
| Edit language (disble language too)<br>(iso code : nl, other data from faker) | Successful message is displayed |
| go to FO | language should nor appear in list in FO |
| go back to BO and filter by name of updated language | First element in list is the language updated |
| delete language | Successful message is displayed |
| reset filters | All languages are displayed<br>number of languages = total of languages |
