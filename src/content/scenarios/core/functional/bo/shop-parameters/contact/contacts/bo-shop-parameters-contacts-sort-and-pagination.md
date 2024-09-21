---
title: "BO - Shop Parameters - Contacts - Sort and pagination"
weight: 4
---

# BO - Shop Parameters - Contacts - Sort and pagination
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1098

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Contacts Tab | Contacts page is well displayed |
| Sort by id_contact desc | List is sorted by id_contact desc<br>(3 -> 2 -> 1) |
| Sort By title asc | List is sorted by title asc<br>(a -> b -> c) |
| Sort by title desc | List is sorted by title desc<br>(c -> b -> a) |
| Sort by email asc | List is sorted by email asc<br>(a -> b -> c) |
| Sort by email desc | List is sorted by email desc<br>(c -> b -> a) |
| Sort by description asc | List is sorted by description asc<br>(a -> b -> c) |
| Sort by description desc | List is sorted by description desc<br>(c -> b -> a) |
| Sort by id_contact asc | List is sorted by id_contact asc<br>(1 -> 2 -> 3) |
| Create 9 new contacts | Number of contacts > 10 |
| Go to page 2 | Page 2 displayed |
| Change pagination | Only one page displayed with all Contacts |
| Delete all new contact | Number of contact = 2 |
