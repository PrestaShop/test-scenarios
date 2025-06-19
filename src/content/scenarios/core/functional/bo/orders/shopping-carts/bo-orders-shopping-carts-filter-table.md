---
title: "BO - Orders - Shopping carts - Filter table"
weight: 1
---

# BO - Orders - Shopping carts - Filter table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-773
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/01_filterShoppingCarts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Shopping carts page | The Shopping carts page is well displayed |
| Filter shopping carts by ID | No records found<br><br>Number of shopping carts = 0 |
| Filter shopping carts by ID | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 5 |
| Filter shopping carts by Order ID | Shopping cart with Order ID = 4 is displayed<br><br>Number of shopping carts = 1 |
| Reset all filters | Number of shopping carts = 5 |
| Filter Shopping carts by Status | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 5 |
| Go to FO > Add any product to cart > Go back to BO > Refresh Shopping carts page | The Shopping carts page is well displayed<br><br>Number of shopping carts = 6 |
| Filter Shopping carts by Status | Number of shopping carts = 1 |
| Filter Shopping carts by Customer | Number of shopping carts = 5 |
| Filter Shopping carts by Customer | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 6 |
| Filter Shopping carts by Carrier | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 6 |
| Filter shopping carts by Date | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 6 |
| Filter Shopping carts by Online | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 6 |
