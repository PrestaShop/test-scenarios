---
title: "BO - Shop Parameters - Product Settings - Update label oos allowed/denied backorders"
weight: 5
---

# BO - Shop Parameters - Product Settings - Update label oos allowed/denied backorders
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1079
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/07_labelOutOfStock.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings > Scroll down to block "Products stock" | See : Label of out-of-stock products with allowed backorders is empty |
| Go to Catalog > Products > Edit Mug The best is yet to come > Edit quantity to 0 > Save & publish | Message Successful update is displayed |
| When out of stock option > Choose Allow order > Save | Message Successful update is displayed |
| Preview the product | FO product page opens<br>Add to cart button is displayed |
| Go back to BO > Shop Parameters > Product Settings > Scroll down to block "Products stock" > Edit Label of out-of-stock products with allowed backorders : "On backorder" > Save | Message Successful update is displayed |
| Go back to Catalog > Products > Edit Mug The best is yet to come > Preview | FO product page is displayed. See under the quantity, the label "(/)On backorder" is displayed |
| Go back to BO > Shop Parameters > Product Settings > Scroll down to block "Products stock" | See Label of out-of-stock products with denied backorders : Out-of-Stock |
| Go to Catalog > Products > Edit Mug The best is yet to come > Edit Stock Tab > When out of stock block > Choose Deny orders > Save & publish | Message Successful update is displayed |
| Preview product | FO product page is displayed with message "(x)Out-of-Stock".<br>Product cannot be added to cart. |