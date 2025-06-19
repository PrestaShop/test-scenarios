---
title: "BO - Shop Parameters - Traffic and SEO - Search Engines - Filter, Sort and Pagination"
weight: 1
---

# BO - Shop Parameters - Traffic and SEO - Search Engines - Filter, Sort and Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1117
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/02_searchEngines/01_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Bo > Shop Parameters >Traffic and SEO > search Engines | **Search Engines Page is displayed |
| Reset all filters | All filters are reset , Search Engines  are  displayed |
| Filter Search Engines by ID =1 | Search Engines  list is filtered by ID=1 |
| Reset all filters | All filters are reset , Search Engines  are  displayed |
| Filter search Engines by Server = google | Search Engines  list is filtered by server =google |
| Reset all filters | All filters are reset , Search Engines  are  displayed |
| Filter  search Engines by get variable =q | Search Engines  list is filtered by get variable  = q |
| Reset all filters | All filters are reset , Search Engines  are  displayed |
| Sort  by ID asc | Search Engiens list are sorted by ID (1-> 2 ->3 ...) |
| Sort by ID desc | Search Engiens list are sorted by ID (3> 2 ->1 ...) |
| Sort  by  server  asc | Search engines list are sorted by server (a-> b ->c ...) |
| Sort  by  server  desc | Search engines list are sorted by server (c-> b ->a ...) |
| Sort  by  GET variable  asc | Search engines list are sorted by GET variables  (a-> b ->c ...) |
| Sort  by  GET variable  desc | Search engines list are sorted by GET variables  (c-> b ->a ...) |
| Change the items number to 10 per page | 4 pages are displayed (page 1/4) |
| Go to page 2 | 2 pages are displayed (page 2/4) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |
