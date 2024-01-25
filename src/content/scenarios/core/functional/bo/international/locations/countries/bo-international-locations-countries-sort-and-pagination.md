---
title: "BO - International - Locations - Countries - Sort and pagination"
weight: 4
---

# BO - International - Locations - Countries - Sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1016
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/04_sortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/countries

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Tab Countries | The Countries page is displayed correctly |
| Sort countries by ID acs | Table is sorted by ID asc (1<2<3) |
| Sort by ID desc | Table is sorted by ID desc (3> 2> 1) |
| Sort by Country acs | table is sorted by country desc (a > b> c) |
| Sort by Country desc | table is sorted by country desc (c > b> a) |
| Sort by ISO code acs | Table is sorted by ISO code asc (1<2<3) |
| Sort by ISO code desc | Table is sorted by ISO code desc (3> 2> 1) |
| Sort by Zone asc | Table is sorted by Zone asc (a<b<c) |
| Sort by Zone desc | Table is sorted by zone desc (c>b>a) |
| Sort by Zone desc | Table is sorted by zone desc (c>b>a) |
| Sort by Zone desc | Table is sorted by zone desc (c>b>a) |
| Click on the number next to "Display" and select a number | You've got 20 countries in the current page |
| Click to page 3 | Page 3 is displayed |
| Click on the left arrow next to the First page | Page 2 is displayed |
| Click on the left arrow next to the First page | Page 1 is displayed |
| Click on the double right arrow next to the last page | Last page is displayed |
| Click on the number next to "Display" and select a number | You've got 50 countries on the current page |
