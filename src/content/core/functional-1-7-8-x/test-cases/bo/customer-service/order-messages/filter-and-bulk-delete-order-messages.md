---
title: Filter And Bulk Delete Order Messages
weight: 2
---

## Preconditions

PrestaShop installed\
Login into BO with admin account
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
| filter order message by name<br>Criteria 'todelete' | number of order messages <= Total of orders messages + 2<br>First row column name contain 'todelete' |
| delete order messages with bulk actions | successful deletion message is displayed |
| delete order messages | number of order messages = Total of orders messages |
