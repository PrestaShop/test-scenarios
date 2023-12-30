---
title: "BO - Shop Parameters - SEO & URLs - Sort and pagination"
weight: 4
---

# BO - Shop Parameters - SEO & URLs - Sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1110
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/01_seoAndUrls/06_sortAndPaginationSeoPages.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters > Traffic & SEO - SEO & URLs | *  SEO & URLs Page is displayed |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |
| Sort  by ID asc | SEO & URLs list are sorted by ID (1-> 2 ->3 ...) |
| Sort  by ID desc | SEO & URLs list are sorted by ID (3-> 2 ->1 ...) |
| Sort  by  Page asc | SEO & URLs list are sorted by Page (a-> b ->c ...) |
| Sort  by  Page desc | SEO & URLs list are sorted by Page (c-> b ->a ...) |
| Sort  by  Page title asc | SEO & URLs list are sorted by Page title (a-> b ->c ...) |
| Sort  by  Page title desc | SEO & URLs list are sorted by Page title (c-> b ->a ...) |
| Sort  by  Friendly URL asc | SEO & URLs list are sorted by Friendly URL(a-> b ->c ...) |
| Sort  by  Friendly URL desc | SEO & URLs list are sorted by Friendly URL(c-> b ->a ...) |
| Change the items number to 10 per page | 4 pages are displayed (page 1/4) |
| Go to page 2 | 2 pages are displayed (page 2/4) |
| Change the items number to 50 per page | Only one page is displayed  _(page 1 / 1)_ |