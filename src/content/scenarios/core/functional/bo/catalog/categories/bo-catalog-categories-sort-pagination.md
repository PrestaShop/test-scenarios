---
title: "BO - Catalog - Categories - Sort & Pagination"
weight: 6
---

# BO - Catalog - Categories - Sort & Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-796
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/02_categories/05_paginationAndSortCategories.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/categories

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to BO > Catalog > categories page | Page title contains 'Categories' |
| Reset all filters | Number of categories > 0 |
| Change the items number to 10 per page | Two pages are displayed and the pagination number = _page 1 /2_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 2_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /2_ |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
| Sort categories by position desc | successful update message is displayed<br>categories are sorted by postion (3 -> 2 -> 1) |
| Sort categories by id_category Asc | successful update message is displayed<br>categories are sorted by id_category (1 -> 2 -> 3) |
| Sort categories by id_category desc | successful update message is displayed<br>categories are sorted by id_category (3 -> 2 -> 1) |
| Sort categories by name Asc | successful update message is displayed<br>categories are sorted by name (x -> y -> z) |
| Sort categories by name desc | successful update message is displayed<br>categories are sorted by name (z -> y -> x) |
| sort categories by position Asc | successful update message is displayed<br>categories are sorted by postion (1 -> 2 -> 3) |
| Delete all product created in the pre-condition with bulk action | All products well deleted |
| Rest all filters | Filter are well reset |
