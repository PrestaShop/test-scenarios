---
title: "BO - Shop Parameters - Search engines - Help card"
weight: 2
---

# BO - Shop Parameters - Search engines - Help card
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8430
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/helpCard.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/traffic-and-seo/add-or-edit-new-seo-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| GO to BO > Shop Parameters > SEO & URLs > Search engines tabs | Search engines page is well displayed |
| Click on *Help* button on top right corner | Help card is displayed from the right side of the page |
| *Case1*<br><br>Click on *{color:#4c9aff}x{color}* button in the Help card header<br><br>*Case 2*<br><br>Click any where in Profiles page<br><br>*Case 3* <br><br>Click on *Help* button | The Help card disappears |
