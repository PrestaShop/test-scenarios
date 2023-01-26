---
title: "BO - International - Locations - Zones - Sort and Pagination"
weight: 4
---

# BO - International - Locations - Zones - Sort and Pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> Zones | the zones page is displayed |
| Change the items number to 10 per page | Two pages are displayed and the pagination number = _page 1 /2_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 2_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /2_ |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
| Sort zones  by id  desc | zones are sorted by ID  (7 -> 6 -> 5...) |
| Sort zones  by id Asc | zones are sorted by ID  (1 -> 2 -> 3...) |
| Sort zones by name zone Asc | successful update message is displayed<br>zones are sorted by name (x -> y -> z) |
| Sort zones by name desc | successful update message is displayed<br>zones are sorted by name (z -> y -> x) |
