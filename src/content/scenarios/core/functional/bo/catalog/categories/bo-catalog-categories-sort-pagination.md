---
title: "BO - Catalog - Categories - Sort & Pagination"
weight: 6
---

# BO - Catalog - Categories - Sort & Pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to categories page | Page title contains 'Categories' |
| Reset all filters | Number of categories > 0 |
| Sort categories by position desc | successful update message is displayed<br>categories are sorted by postion (3 -> 2 -> 1) |
| Sort categories by id_category Asc | successful update message is displayed<br>categories are sorted by id_category (1 -> 2 -> 3) |
| Sort categories by id_category desc | successful update message is displayed<br>categories are sorted by id_category (3 -> 2 -> 1) |
| Sort categories by name Asc | successful update message is displayed<br>categories are sorted by name (x -> y -> z) |
| Sort categories by name desc | successful update message is displayed<br>categories are sorted by name (z -> y -> x) |
| sort categories by position Asc | successful update message is displayed<br>categories are sorted by postion (1 -> 2 -> 3) |
