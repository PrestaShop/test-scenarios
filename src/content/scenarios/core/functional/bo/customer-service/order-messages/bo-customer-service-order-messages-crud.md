---
title: "BO - Customer Service - Order Messages - CRUD"
weight: 1
---

# BO - Customer Service - Order Messages - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-868
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/02_orderMessages/01_CRUDOrderMessage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customer-service/order-messages-1/adding-or-editing-order-message

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to order messages page | Title of page contains 'Order Messages •' |
| reset all filters | Total of order message > 0 |
| go to new order message page | Title of page contains 'Add new' |
| create order message<br>Criteria :  <br>name : lorem.word from faker<br>frName : same as name<br>message : lorem.sentence from faker<br>frMessage : same as message | Successful message is displayed |
| Reset filter | Number of order messages = Total of order messages + 1 |
| filter by name 'name of order message created' | Number of order messages < Total of order messages + 1 |
| Click on edit first row in grid | Title contains 'Edit:' |
| Edit order messages<br>Criteria :  <br>name : lorem.word from faker<br>frName : same as name<br>message : lorem.sentence from faker<br>frMessage : same as message | Successful message is displayed |
| Reset filters | Number of order messages = Total of order messages + 1 |
| Filter order messages bu name <br>Criteria :  'name of edited order message' | Number of order messages < Total of order messages + 1 |
| delete order message | successful message is displayed |
| reset filters | Number of order messages = Total of order messages |
