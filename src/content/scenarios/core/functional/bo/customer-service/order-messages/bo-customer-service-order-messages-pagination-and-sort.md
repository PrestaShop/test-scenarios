---
title: "BO - Customer Service - Order Messages - Pagination and sort"
weight: 3
---

# BO - Customer Service - Order Messages - Pagination and sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-870
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/02_orderMessages/03_paginationAndSortOrderMessages.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customer-service/order-messages-1

## Steps
| Step Description | Expected result |
| ----- | ----- |
| create more than 10 order messages with "todelete" name (todelete1,todelete2 etc...) | Total of orders messages > 10<br><br>Only one page is displayed  _(page 1 / 1)_ |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
| Sort Order Messages by ID desc | Order Messages are sorted by ID (3 -> 2 -> 1) |
| Sort Order Messages by Name Asc | Order messages are sorted by name (x -> y -> z) |
| Sort Order Messages by Name desc | Order messages are sorted by name (z -> y -> x) |
| Sort Order Messages by Message Asc | Order messages are sorted by Message (x -> y -> z) |
| Sort Order Messages by Message desc | Order messages are sorted by Message (z -> y -> x) |
