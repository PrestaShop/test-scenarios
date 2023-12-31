---
title: "BO - Orders - View Guest"
weight: 5
---

# BO - Orders - View Guest
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1614
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/09_viewGuest.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders" page" | Orders listing is displayed correctly |
| Reset all filters and get the number of orders | The order number > 0 |
| Filter orders by Guest name | Number of orders < Total of orders<br>An order guest contains the searched guest |
| Click on the guest Link | Redirection to the customer details page in a new Tab |
| Delete the created Guest | The guest is well deleted |