---
title: "BO - Shop Parameters - SEO & URLs - Generate Robots.txt file"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - Generate Robots.txt file
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1115
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/03_robotsFileGeneration/01_generateRobotsTxtFile.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo/add-or-edit-new-seo-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Traffic & SEO | SEO & URLs page is well displayed |
| Scroll to block : Robots file generation > Click on Generate robots.txt file button | Successful update message is displayed |
| Go to YOUR_SHOP.COM/robots.txt | See your robots.txt file |
| Go to International > Translations > Add German language | The translations have been successfully added. message is displayed |
| Go back to BO > Shop parameters > Traffic & SEO > Scroll to block : Robots file generation > Click on Generate robots.txt file button | See in your robots.txt file, new Directories and Files have been added with the prefix /*de/ |
