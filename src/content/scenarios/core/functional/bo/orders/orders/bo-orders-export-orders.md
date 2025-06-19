---
title: "BO - Orders - Export Orders"
weight: 11
---

# BO - Orders - Export Orders
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-734
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/03_exportOrders.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders page | Orders listing is displayed correctly |
| Click to configuration button > Export | The file is downloaded successfully<br>Data is correct |
