---
title: "BO - Shop Parameters - SEO & URLs - SEO Options"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - SEO Options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1114
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/05_seoOptions/01_displayAttributesInProductMetaTitle.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo/add-or-edit-new-seo-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Traffic & SEO > Scroll down to block SEO options | See option Display attributes in the product meta title is disabled |
| Click View my shop > Open Hummingbird printed t-shirt > Inspect element > Search for <title> element | You will find<br>{code:java}<br><title>Hummingbird printed t-shirt</title>{code} |
| Go back to BO > Shop parameters > Traffic & SEO > Scroll down to block SEO options > Enable the option "Display attributes in the product meta title" > Save | Update successful alert is displayed |
| Click View my shop > Open Hummingbird printed t-shirt > Inspect element > Search for <title> element | YOu will find <br>{code:java}<br><title>Hummingbird printed t-shirt Size S Color White</title><br>{code} |
| Go back to BO > Shop parameters > Traffic & SEO > Scroll down to block SEO options > Disable the option "Display attributes in the product meta title" > Save | Update successful alert is displayed |
