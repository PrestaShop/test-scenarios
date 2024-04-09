---
title: "FO - Search - Consult product quickview"
weight: 6
---

# FO - Search - Consult product quickview
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5107
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/07_search/06_consultProductQuickView.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > In search bar type "mug" | Page Search results for "mug" is displayed<br><br>Found 5 products |
| Put your mouse over the product "Customizable mug" | The button "Quickview" is displayed |
| Click on the "Quickview" button | Product modal is displayed :<br> * On the left : image of product<br> * On the right : title, price, tax, description, customisation, quantity, Add to cart button<br> * On the bottom : Share buttons and All details buttons |
| Close modal | Page Search results for "mug" is displayed<br><br>Found 5 products |
