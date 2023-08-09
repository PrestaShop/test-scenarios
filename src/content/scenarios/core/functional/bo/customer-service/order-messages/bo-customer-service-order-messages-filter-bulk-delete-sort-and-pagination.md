---
title: "BO - Customer Service - Order Messages - Filter / Bulk Delete / Sort and Pagination"
weight: 2
---

# BO - Customer Service - Order Messages - Filter / Bulk Delete / Sort and Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-869

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to order messages page | Title contains 'Order Messages •' |
| reset all filters | Total of orders messages > 0 |
| Go to create new order message page | Title contains 'Add new' |
| Create new order message <br>Criteria : {name: 'todelete'} | Successful message is displayed<br>number of order messages = Total of orders messages + 1 |
| Go to create new order message page | Title contains 'Add new' |
| Create new order message <br>Criteria : {name: 'todelete2'} | Successful message is displayed<br>number of order messages = Total of orders messages + 2 |
| filter order message by name<br>Criteria 'todelete2' | number of order messages < Total of orders messages + 2<br>First row column name contain 'todelete2' |
| reset filters | number of order messages = Total of orders messages + 2 |
| filter order message by message<br>Criteria 'second created order message' | number of order messages < Total of orders messages + 2<br>First row column name contain 'second created order message' |
| reset filters | number of order messages = Total of orders messages + 2 |
| create more than 10 order messages with "todelete" name (todelete1,todelete2 etc...) | Total of orders messages > 10<br><br>Only one page is displayed  _(page 1 / 1)_ |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
| Sort Order Messages by ID desc | Order Messages are sorted by ID (3 -> 2 -> 1) |
| Sort Order Messages by Name Asc | Order messages are sorted by name (x -> y -> z) |
| Sort Order Messages by Name desc | Order messages are sorted by name (z -> y -> x) |
| Sort Order Messages by Message Asc | Order messages are sorted by Message (x -> y -> z) |
| Sort Order Messages by Message desc | Order messages are sorted by Message (z -> y -> x) |
| filter order message by name<br>Criteria 'todelete' | number of order messages <= Total of orders messages + 2<br>First row column name contain 'todelete' |
| delete order messages with bulk actions | successful deletion message is displayed |
| delete order messages | number of order messages = Total of orders messages |
