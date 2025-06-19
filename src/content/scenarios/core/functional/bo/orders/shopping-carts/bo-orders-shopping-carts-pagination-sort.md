---
title: "BO - Orders - Shopping carts - Pagination & sort"
weight: 3
---

# BO - Orders - Shopping carts - Pagination & sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
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
| Sort by ID ASC | List is ordered by ID ascending |
| Sort by Order ID DESC | List is ordered by Order ID descending |
| Sort by Status ASC | List is ordered by Status ascending |
| Sort by Status DESC | List is ordered by Status descending |
| Sort by Customer ASC | List is ordered by Customer ascending |
| Sort by Customer DESC | List is ordered by Customer descending |
| Sort by Carrier ASC | List is ordered by Carrier ascending |
| Sort by Carrier DESC | List is ordered by Carrier descending |
| Sort by Date ASC | List is ordered by Date ascending |
| Sort by Date DESC | List is ordered by Date descending |
| Sort by Online ASC | List is ordered by Online ascending |
| Sort by Online DESC | List is ordered by Online descending |
