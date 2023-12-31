---
title: "BO - Shipping - Carriers - Change position"
weight: 5
---

# BO - Shipping - Carriers - Change position
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-973
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/01_carriers/04_changePosition.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>IMPROVE> Shipping> Carriers | Carriers page is displayed |
| On position column, click on the position of the first carrier on the carriers table and drop it to the second ligne. | Successful update message is displayed.<br><br>Carrier place is well changed. |
