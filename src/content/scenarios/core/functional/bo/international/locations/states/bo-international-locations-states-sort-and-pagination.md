---
title: "BO - International - Locations - States - Sort and pagination"
weight: 4
---

# BO - International - Locations - States - Sort and pagination
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1021

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
| Sort state by name desc | states are sorted by name  ( z-> y -> ...) |
| Sort state by ISO code  asc | states are sorted by ISO code   ( a-> b -> ...) |
| Sort state by ISO code  asc | states are sorted by ISO code   ( a-> b -> ...) |
| Sort state by zone  desc | states are sorted by zone  ( z-> y -> ...) |
| Sort state by zone  asc | states are sorted by zone  ( a-> b -> ...) |
| Sort state by country  desc | states are sorted by country  ( z-> y -> ...) |
| Sort state by country  asc | states are sorted by country  ( a-> b -> ...) |
| Sort state by ID asc | states are sorted by postion (352 ->353 -> ...) |
