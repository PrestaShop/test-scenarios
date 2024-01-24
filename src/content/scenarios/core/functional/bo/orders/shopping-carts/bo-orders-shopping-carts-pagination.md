---
title: "BO - Orders - Shopping carts - Pagination"
weight: 3
---

# BO - Orders - Shopping carts - Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-775
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/02_sortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Create 16 Orders from the FO | Orders well created |
| Go to BO > Orders > Shopping carts page | The Shopping cart list page is displated |
| Change the Display items to 20 per page | There are two pages displayed |
| Click on "Next" | The second page is displayed |
| Click on "Previous" | The first page is displayed |
| Change the Display items to 300 per page | The pagination number = 1 |
