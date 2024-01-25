---
title: "BO - Shop Parameters - General - Enable / Disable Brands"
weight: 6
---

# BO - Shop Parameters - General - Enable / Disable Brands
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1039
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/09_enableDisableBrands.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/general/general

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Scroll down to footer > Click on Sitemap > Click on Brands | See that Brands page is displayed. |
| Go to BO > Catalog > Brands & Suppliers | Blue alert is displayed : "The display of your brands is enabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
| Go to BO > Shop Parameters > General > Disable Display Brands > Save | Page title contains 'Preferences'<br><br>Message Successful update is displayed |
| Go to FO > Scroll down to footer > Click on Sitemap | See that the Brands page link is not displayed |
| Go to BO > Catalog > Brands & Suppliers | Blue alert is displayed : "The display of your brands is disabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
