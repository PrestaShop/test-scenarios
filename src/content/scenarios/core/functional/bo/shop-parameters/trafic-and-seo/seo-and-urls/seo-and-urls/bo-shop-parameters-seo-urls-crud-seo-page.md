---
title: "BO - Shop Parameters - SEO & URLs - CRUD SEO page"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - CRUD SEO page
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7800
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/01_seoAndUrls/02_CRUDSeoPage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo/add-or-edit-new-seo-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Traffic & SEO | Title contains 'SEO & URLs' |
| Click on Set up a new page button | Title contains 'New page configuration' |
| Fill the form > Save | Successful creation message is displayed |
| Filter by Page name = order-return > Click on Search | order-return page is displayed |
| Click on the edit button | Page is displayed with title 'Editing configuration for order-return' |
| Edit the form with the following data > Save | Successful update message is displayed |
| Reset filter | All SEO pages in list are displayed |
| Filter by Page name = pdf-order-return | order-return page is displayed |
| Delete pdf-order-return | Successful deletion message is displayed<br>No result found displayed in the table |
| Reset filter | All SEO pages are displayed |
