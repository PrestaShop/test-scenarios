---
title: CRUD Contact
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > Contact' page | page title contains 'Contacts' |
| reset all filters | Total of contacts > 0 |
| go to add new contact page | page title contains 'Add new' |
| Create contact<br>(faker data) | Successful message is displayed<br>number of contacts after creation = total of contacts + 1 |
| filter list by email of created contact | Contact appears in the top of the list |
| go to edit contact page | page title contains 'Edit:' |
| Update contact<br>(faker data) | Successful message is displayed<br>number of contacts after creation = total of contacts + 1 |
| filter list by email of updated contact | Contact appears in the top of the list |
| delete contact | contact is deleted |
