---
title: "BO - Design - Pages - Pagination"
weight: 4
---

# BO - Design - Pages - Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-950

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Pages | Pages page is displayed correctly |
| create 11 new pages in category "home" | pages table =nbr of pages + 11 |
| Reset all filters | All filters are reset , the query sql are  displayed |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Go back to the first page | The first page is displayed (page 1 / 2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
