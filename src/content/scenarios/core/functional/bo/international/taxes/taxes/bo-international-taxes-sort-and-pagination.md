---
title: "BO - International - Taxes - Sort and pagination"
weight: 5
---

# BO - International - Taxes - Sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1027

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to taxes page | Page title contains 'Taxes' |
| Sort by id_tax desc | list is sorted by id_tax desc<br>(3 -> 2 -> 1) |
| Sort by name asc | list is sorted by name asc<br>(a -> b -> c) |
| Sort by name desc | list is sorted by name desc<br>(c -> b -> a) |
| Sort by rate asc | list is sorted by rate asc<br>(1 -> 2 -> 3) |
| Sort by rate desc | list is sorted by rate desc<br>(3 -> 2 -> 1) |
| Sort by id_tax asc | list is sorted by id_tax asc<br>(1 -> 2 -> 3) |
| Reset all filters | All filters are reset. All states are displayed |
| Change the items number to 20 per page | one page is  displayed and the pagination is _Viewing 1-20 out of 32 (page 1 / 2)_ |
| Click on next | The second page is well displayed & the pagination is _Viewing 21-32 out of 32 (page 2 / 2)_ |
| Click on previous | The first page is well displayed and the pagination is _Viewing 21-32 out of 32 (page 2 / 2)_ |
| Change the items number to 100 per page | Only one page is displayed  _Viewing 1-32 out of 32 (page 1 / 1)_ |
