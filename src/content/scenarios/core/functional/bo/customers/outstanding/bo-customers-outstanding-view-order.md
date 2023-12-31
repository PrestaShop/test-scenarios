---
title: "BO - Customers - Outstanding - View Order"
weight: 3
---

# BO - Customers - Outstanding - View Order
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3263
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/03_outstanding/02_viewOrder.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders list page | The Orders list page is well displayed |
| Change the status of the last order created from the pre-condition step to payment accepted | The alert "Successful update." is well displayed |
| Go to BO > Customers > Oustanding page | The Outstanding page is well displayed |
| Click on the loop icon to view order | The order view page is well displayed |
| Go to BO > Shop Parameters > Customer Settings and Disable B2B | The alert Update successful is well displayed |