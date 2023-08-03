---
title: "BO - Shop Parameters - Product Settings - Enable, disable display available quantities"
weight: 1
---

# BO - Shop Parameters - Product Settings - Enable, disable display available quantities
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1068

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Product Settings | Product Settings is displayed |
| Display available quantities on the product page > NO > Save | Update successful alert is displayed |
| View my shop and go to first product page | Quantity is not displayed in product page |
| enable display available quantities on the product page | Success message is displayed |
| View my shop and go to first product page | Quantity is displayed in product page |
