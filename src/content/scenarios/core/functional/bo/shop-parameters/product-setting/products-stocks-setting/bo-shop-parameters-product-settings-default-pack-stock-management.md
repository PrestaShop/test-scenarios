---
title: "BO - Shop Parameters - Product Settings - Default pack stock management"
weight: 6
---

# BO - Shop Parameters - Product Settings - Default pack stock management
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1080
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/02_defaultPackStockManagement.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Products stock | See Default pack stock management is set to Decrement pack only. |
| Go to Catalog > Products | See Pack Mug + Framed poster quantity is 100 |
| Go to FO > Search for Pack product > Add Pack Mug + Framed poster to cart > Proceed to checkout | Your order is confirmed |
| Go to Catalog > Products | See Pack Mug + Framed poster quantity is 99 |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Products stock > Set Default pack stock management to "Decrement products in pack only." > Save | Message Update successful is displayed |
| Go to FO > Search for Pack product > Add Pack Mug + Framed poster to cart > Proceed to checkout | Your order is confirmed |
| Go to Catalog > Products | See:<br>- Pack Mug + Framed poster quantity is 99<br>- Mug The adventure begins quantity is 295<br>- Today is a good day Framed poster quantity is 895 |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Products stock > Set Default pack stock management to "Decrement both." > Save | Message Update successful is displayed |
| Go to FO > Search for Pack product > Add Pack Mug + Framed poster to cart > Proceed to checkout | Your order is confirmed |
| Go to Catalog > Products | See:<br><br>Pack Mug + Framed poster quantity is 98<br>Mug The adventure begins quantity is 290<br>Today is a good day Framed poster quantity is 890 |
