---
title: Sort categories
weight: 6
---

## Preconditions

Prestashop installed\
login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to categories page | Page title contains 'Categories' |
| reset all filters | Number of categories > 0 |
| sort categories by position desc | successful update message is displayed<br>categories are sorted by postion (3 -> 2 -> 1) |
| sort categories by id_category Asc | successful update message is displayed<br>categories are sorted by id_category (1 -> 2 -> 3) |
| sort categories by id_category desc | successful update message is displayed<br>categories are sorted by id_category (3 -> 2 -> 1) |
| sort categories by name Asc | successful update message is displayed<br>categories are sorted by name (x -> y -> z) |
| sort categories by name desc | successful update message is displayed<br>categories are sorted by name (z -> y -> x) |
| sort categories by position Asc | successful update message is displayed<br>categories are sorted by postion (1 -> 2 -> 3) |
