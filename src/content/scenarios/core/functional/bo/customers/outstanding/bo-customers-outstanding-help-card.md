---
title: "BO - Customers - Outstanding - Help card"
weight: 1
---

# BO - Customers - Outstanding - Help card
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3333
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/03_outstanding/01_helpCard.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Outstanding page | The Outstanding page is well displayed |
| Click on the Help Card | The documentation modal is well displayed in the English language |
| Click on the Help Card again | The documentation modal is closed |
| Go to BO > Shop Parameters > Customer Settings and Disable B2B | The alert Update successful is well displayed |
