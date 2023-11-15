---
title: "BO - Shop Parameters - General - Enable / disable multistore"
weight: 8
---

# BO - Shop Parameters - General - Enable / disable multistore
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1041
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/11_enableDisableMultistore.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Shop Parameters> General | Preferences page is displayed on General tab |
| Enable Multistore YES,<br><br>save. | Successful update message is displayed. |
| Go to Advanced parameters> Mutistore | Multistore page is well displayed. |
| Go back to Shop Parameters> General,<br><br>Enable Multistore NO | Successful update message is displayed. |
| Go to Advanced Parameters | Multistore page is not found. |
