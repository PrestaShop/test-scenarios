---
title: "FO - Home Page : Display some products"
weight: 4
---

# FO - Home Page : Display some products
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8224
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/06_homePage/02_displaySomeProducts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go below the slider | Custom Text Block is displayed |
| Scroll down after the "Custom text block" | * "Popular Products " section is dislayed : 8 products cards displayed<br> * "All products" button is displayed |
| Scroll down after the "All products" button. | ps_banner is well displayed<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1351/ps_banner.png|width=740,height=142! |
| Scroll down after the banner | * New products section is well displayed showing 8 products cards<br> * "All new products" button is well displayed |
