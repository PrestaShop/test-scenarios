---
title: "BO - International - Locations - States - Sort and pagination"
weight: 4
---

# BO - International - Locations - States - Sort and pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> States | the States  page is displayed |
| Reset all filters | All filters are reset. All states are displayed |
| Change the items number to 20 per page | one page is  displayed and the pagination number = _page 1 /18_<br><br>_display :20/353_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 18_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /18_ |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 4)_ |
| Sort state by ID desc | states are sorted by postion (353 -> 352 -> ...) |
| Sort state by name desc | states are sorted by name  ( z-> y -> ...) |
| Sort state by ISO code  desc | states are sorted by ISO code   ( z-> y -> ...) |
| Sort state by zone  desc | states are sorted by zone  ( z-> y -> ...) |
| Sort state by country  desc | states are sorted by country  ( z-> y -> ...) |
