---
title: "BO - Orders - Shopping carts - Sort shopping carts - bug"
weight: 2
---

# BO - Orders - Shopping carts - Sort shopping carts - bug
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-774
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/02_sortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Shopping cart page | The Shopping cart list page is displayed |
| Sort by ID DESC | The Shopping carts are sorted by ID DESC |
| Sort by Order_id ASC | The shopping carts are sorted by Order_id ASC |
| Sort by Order_id DESC | The shopping carts are sorted by Order_id DESC |
| Sort by Customer ASC | The Shopping carts are sorted by customer ASC |
| Sort by Customer DESC | The Shopping carts are sorted by customer DESC |
| Sort by Carrier ASC | The Shopping carts are sorted by carrier ASC |
| Sort by Carrier DESC | The Shopping carts are sorted by carrier DESC |
| Sort by Date ASC | The Shopping carts are sorted by date ASC |
| Sort by Date DESC | The Shopping carts are sorted by date DESC |
| Sort by Online DESC | The Shopping carts are sorted by online DESC |
| Sort by Online ASC | The Shopping carts are sorted by Online ASC |
| Sort by ID ASC | The Shopping carts are sorted by ID ASC |
