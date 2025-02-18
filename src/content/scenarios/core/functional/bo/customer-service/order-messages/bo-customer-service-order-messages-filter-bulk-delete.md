---
title: "BO - Customer Service - Order Messages - Filter / Bulk Delete"
weight: 4
---

# BO - Customer Service - Order Messages - Filter / Bulk Delete
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7265

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to order messages page | Title contains 'Order Messages •' |
| reset all filters | Total of orders messages > 0 |
| Go to create new order message page | Title contains 'Add new' |
| Create new order message <br>Criteria : {name: 'todelete'} | Successful message is displayed<br>number of order messages = Total of orders messages + 1 |
| Go to create new order message page | Title contains 'Add new' |
| Create new order message <br>Criteria : {name: 'todelete2'} | Successful message is displayed<br>number of order messages = Total of orders messages + 2 |
| filter order message by ID<br>Criteria '3' | number of order messages < Total of orders messages + 2<br>First row column name contain 'todelete2' |
| reset filters | number of order messages = Total of orders messages + 2 |
| filter order message by name<br>Criteria 'todelete2' | number of order messages < Total of orders messages + 2<br>First row column name contain 'todelete2' |
| reset filters | number of order messages = Total of orders messages + 2 |
| filter order message by message<br>Criteria 'second created order message' | number of order messages < Total of orders messages + 2<br>First row column name contain 'second created order message' |
| filter order message by name<br>Criteria 'todelete' | number of order messages <= Total of orders messages + 2<br>First row column name contain 'todelete' |
| delete order messages with bulk actions | successful deletion message is displayed |
