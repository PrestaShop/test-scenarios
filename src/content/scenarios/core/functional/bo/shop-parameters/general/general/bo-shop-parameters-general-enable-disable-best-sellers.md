---
title: "BO - Shop Parameters - General - Enable / Disable Best sellers"
weight: 7
---

# BO - Shop Parameters - General - Enable / Disable Best sellers
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1042
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/10_enableDisableBestSellers.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/general/general

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Scroll down to footer > Click on Sitemap > Click on Best sellers | See that Best sellers page is displayed. |
| Go to BO > Shop Parameters > General > Disable Display Best sellers > Save | Page title contains 'Preferences'<br><br>Message Successful update is displayed |
| Go to FO > Scroll down to footer > Click on Sitemap | See that the Best sellers page link is not displayed |
