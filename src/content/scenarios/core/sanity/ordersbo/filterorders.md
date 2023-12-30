---
title: "FilterOrders"
weight: 1
---

# FilterOrders
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1340
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/02_ordersBO/01_filterOrders.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders" page" | Orders page is displayed correctly |
| Filter by ID<br>Criteria: ID of the first order in fixtures | One line is displayed<br>ID is correct |
| Filter by REFERENCE<br>Criteria: REFERENCE of the fourth order in fixtures | One line is displayed<br>REFERENCE is correct |
| Filter by STATUS<br>Criteria: Payment error" | One line is displayed<br>STATUS is correct |
| Logout from the BO | Logout is successful |