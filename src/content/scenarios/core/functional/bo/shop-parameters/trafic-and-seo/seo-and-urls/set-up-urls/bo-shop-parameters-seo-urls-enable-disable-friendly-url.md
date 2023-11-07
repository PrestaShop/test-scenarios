---
title: "BO - Shop Parameters - SEO & URLs - Enable, disable friendly URL"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - Enable, disable friendly URL
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1107
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/01_seoAndUrls/02_setUpUrls/03_enableDisableFriendlyURL.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Shop Parameters > Traffic & SEO | Page is displayed with title SEO & URLs<br><br>SEO & URLs tab is selected by default |
| Scroll down to *Set up URLs* section  > switch  *Friendly URL button* to No > Click *Save* button | Message "Update successful" is displayed |
| Go to FO > Click at any product > Check the URL | The URL  should contain "index.php" |
| Go down to *Set up URLs* section  > switch  *Friendly URL button* to Yes > Click *Save* button | Message "Update successful" is displayed |
| Go to FO > Click at any product > Check the URL | The URL  should contain "en" |
