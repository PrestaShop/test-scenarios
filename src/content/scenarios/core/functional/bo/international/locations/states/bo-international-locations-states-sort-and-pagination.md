---
title: "BO - International - Locations - States - Sort and pagination"
weight: 4
---

# BO - International - Locations - States - Sort and pagination
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1021

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > States | The States page is displayed |
| Change the items number to 20 per page | One page is displayed and the pagination number = _page 1 /18_<br><br>_display : 20/353_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 18_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /18_ |
| Change the items number to 100 per page | First page is displayed _(page 1 / 4)_ |
| Sort State by ID DESC | States are sorted by position (353 -> 352 -> ...) |
| Sort State by Name DESC | States are sorted by name (z-> y -> ...) |
| Sort State by ISO code ASC | States are sorted by ISO code (a-> b -> ...) |
| Sort State by Zone DESC | States are sorted by Zone (z-> y -> ...) |
| Sort State by Country DESC | States are sorted by Country (z-> y -> ...) |
| Sort State by Country ASC | States are sorted by Country (a-> b -> ...) |
| Sort state by ID ASC | States are sorted by Position (1 -> 2 -> ...) |
