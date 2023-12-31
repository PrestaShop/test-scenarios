---
title: "BO - Virtual Product Tab"
weight: 16
---

# BO - Virtual Product Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5212
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/13_virtualTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Virtual Product Tab > Add new product > Add Title > Switch to Online > Go to Virtual Tab | Successful update message is displayed |
| Add quantity = 100 > Save | Recent stock movements table is displayed with recent data (Date & Time, Employee, Quantity)<br> <br>Successful update message is displayed |
| Enable Downloadable file > Add downloadable file (with following data) > Save and publish | Successful update message is displayed |
| Click Preview > Log into customer account > Add to cart > Proceed to checkout | YOUR ORDER IS CONFIRMED message when order is placed |
| Go to FO > Your account > Order History > Details > Download your virtual product | Your product is dowloaded |
| Go back to BO > Virtual Product Tab > In "Label when out of stock (and backorders allowed)" block > Add a Label when in stock : BACKORDERS ALLOWED > Edit quantity to 0 > Save and publish > Click Preview | In FO > See "BACKORDERS ALLOWED" label under quantity |
| In BO > Virtual Product Tab > In "When out of stock" block > Check: Use default behavior (Deny orders) > Save and publish > Preview | In FO > See "Out-of-Stock" label under quantity |