---
title: "BO - Orders - View customer"
weight: 4
---

# BO - Orders - View customer
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-727
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/08_viewCustomer.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders page | Orders listing is displayed correctly |
| Reset all filters and get the number of orders | The order number > 0 |
| Filter orders by Customer | Number of orders < Total of orders<br>All orders customer contains the searched customer |
| Click on the Customer Link | Redirection to the customer details page in a new Tab |
