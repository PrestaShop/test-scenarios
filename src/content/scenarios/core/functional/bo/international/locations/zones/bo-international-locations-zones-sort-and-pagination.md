---
title: "BO - International - Locations - Zones - Sort and Pagination"
weight: 4
---

# BO - International - Locations - Zones - Sort and Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1012
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/01_zones/04_sortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/zones

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> Zones | the zones page is displayed |
| Go to International ->locations> Zones | the zones page is displayed |
| Click on Add new zone | Add new Zone Page is displayed correctly |
| Fill all information > Click on save | New zone is saved correctly.<br><br>Message is displayed "Successful creation"<br><br>Redirection to Zone page |
| Filter by Zone = " test" | Filter is succeeded<br><br>Zone test is displayed |
| Click on Zone test | Edit Zone Page is displayed correctly.<br><br>Page title contains  test |
| Edit the name of the Zone by ZoneNAME > Click on save | New zone is saved correctly.<br><br>Message is displayed "Update successful"<br><br>Redirection to Zone page |
| Click to "..." > Delete | A modale should appear:<br><br> <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click to Delete | Message is displayed : "Successful deletion"<br><br>No records found |
| Reset filter | All zones are displayed |
| Add 20 new zones | zones page is well displayed<br><br>the zones table  = 20 |
| Change the items number to 10 per page | Two pages are displayed and the pagination number = _page 1 /2_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 2_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /2_ |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
| Sort zones  by id  desc | zones are sorted by ID  (7 -> 6 -> 5...) |
| Sort zones  by id Asc | zones are sorted by ID  (1 -> 2 -> 3...) |
| Sort zones by name zone Asc | successful update message is displayed<br>zones are sorted by name (x -> y -> z) |
| Sort zones by name desc | successful update message is displayed<br>zones are sorted by name (z -> y -> x) |
