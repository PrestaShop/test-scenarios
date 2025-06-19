---
title: "FO - Send a message"
weight: 4
---

# FO - Send a message
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1212
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/02_orderHistory/01_orderDetails/04_sendMessage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO |  |
| Login with a customer account |  |
| Go to "account" page |  |
| Go to "Order history and details" |  |
| Select an order validated  and go to "details" |  |
| In send message section, select a product, write a message and click on send | In BO => Customers Service => Customers Service the message is displayed |
| Check received email | received email => <br><br>Message from a customer |
