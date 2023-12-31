---
title: "BO- Orders - Filter orders table"
weight: 1
---

# BO- Orders - Filter orders table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-723
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/02_filterOrders.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders" page" | Orders listing is displayed correctly |
| Reset all filters and get the number of orders | The orders number > 0 |
| Filter orders by ID | Number of orders < Total of orders<br>The order id result is equal to the searched ID |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Reference | Number of orders < Total of orders<br>The order reference result is equal to the searched reference |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by New client | Number of orders < Total of orders<br>The new client result is equal to the searched value yes/no |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Delivery | Number of orders < Total of orders<br>All orders delivery contains the searched delivery |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Customer | Number of orders < Total of orders<br>All orders customer contains the searched customer |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Total | Number of orders < Total of orders<br>All orders total contains the searched total |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Payment method | Number of orders < Total of orders<br>All orders payment method contains the searched payment method |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Status | Number of orders < Total of orders<br>All orders statuses contain the searched status |
| Reset all filters | Number of orders = Total of orders |
| Filter orders by Date (From And/or To) | Number of orders < Total of orders<br> All orders date between the searched date |
| Reset all filters | Number of orders = Total of orders |