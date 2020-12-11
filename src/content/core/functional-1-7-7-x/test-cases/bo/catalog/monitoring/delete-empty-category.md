---
title: Delete Empty Category
weight: 1
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to catalog > categories page | Page title contains 'Categories' |
| reset all filters | Number of categories > 0 |
| go to add new category page | Page title contains 'Add new' |
| create new category | Successful message is displayed<br>number of categories = total of categories + 1 |
| go To monitoring page | Page title contains 'Monitoring' |
| filter category grid by name of created category | Category created is displayed in top of the grid |
| reset categories grid in monitoring page | At least 1 category is displayed in grid |
| filter category grid by name of created category | Category created is displayed in top of the grid |
| delete category rceated from monitoring page | redirection to categories page<br>Successful delete message is displayed |
| reset filter in categories page | Number of categories after reset = total of categories |
