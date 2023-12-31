---
title: "BO - Orders - Shopping carts - Filter table"
weight: 1
---

# BO - Orders - Shopping carts - Filter table
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-773
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/01_filterShoppingCarts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Shopping cart page | The Shopping cart page page is displayed |
| Reset all filters and get the number of shopping carts | The shopping carts number > 0 |
| Change the pagination to 300 items per page | The pagination is changed, one page is displayed |
| Filter shopping carts by ID | Number of shopping carts < Total of shopping carts<br>The shopping cart id result is equal to the searched ID |
| Reset all filters | Number of shopping carts = Total of shopping carts |
| Filter shopping carts by ID order | Number of shopping carts < Total of shopping carts<br>The shopping cart id_order result is equal to the searched ID_Order |
| Reset all filters | Number of shopping carts = Total of shopping carts |
| Filter Shopping carts by Customer | Number of shopping carts < Total of shopping carts<br>All shopping carts customer contains the searched customer |
| Reset all filters | Number of shopping carts = Total of shopping carts |
| Filter Shopping carts by Carrier | Number of shopping carts < Total of shopping carts<br>All shopping carts carrier contains the searched carrier |
| Reset all filters | Number of shopping carts = Total of shopping carts |
| Filter shopping carts by Date | Number of shopping carts < Total of shopping carts<br>All shopping carts date between the searched date |
| Reset all filters | Number of shopping carts = Total of shopping carts |
| Filter Shopping carts by Online | Number of shopping carts < Total of shopping carts<br>All shopping carts status (online: yes/No) contains the searched status |
| Reset all filters | Number of shopping carts = Total of shopping carts |