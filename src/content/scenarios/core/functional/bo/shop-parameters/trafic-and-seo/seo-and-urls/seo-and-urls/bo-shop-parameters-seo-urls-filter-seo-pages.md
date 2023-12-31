---
title: "BO - Shop Parameters - SEO & URLs - Filter SEO Pages"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - Filter SEO Pages
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1105
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/01_seoAndUrls/01_filterSeoPages.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop PArameters > Traffic & SEO - SEO & URLs | *  SEO & URLs Page is displayed |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |
| Filter SEO & URLs by ID =1 | SEO & URLs list is filtered by ID=1 |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |
| Filter SEO & URLs by Page  = pagenotfound | SEO & URLs list is filtered by Page = pagenotfound |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |
| Filter SEO & URLs by Page title   = 404 error | SEO & URLs list is filtered by Page title = 404 error |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |
| Filter SEO & URLs by Friendly URL   = page-not-found | SEO & URLs list is filtered by Friendly URL = page-not-found |
| Reset all filters | All filters are reset , SEO & URLs  are  displayed |