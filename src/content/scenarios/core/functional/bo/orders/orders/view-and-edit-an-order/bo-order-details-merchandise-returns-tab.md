---
title: "BO - Order details - Merchandise returns tab"
weight: 6
---

# BO - Order details - Merchandise returns tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-741
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/06_merchandiseReturnsTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customer Service > Merchandise returns > Enable returns | Returns are enabled |
| Go to Order > Orders > Choose order with these 2 states : Payment validated & Shipped | Order diplays |
| Go to FO > Log into Customer account > Go to Order history and details > Choose Order | Order details display |
| Check product you want to return > Add a message > Click on Request a return | List of Merchandise returns displays in customer account |
| Go back to BO > Order of choice > Merchandise Return tab | In Merchandise Return tab : one new Return added |
| Go to BO > Customer Service > Merchandise Return > Click on Merchandise Return | See Merchandise Return list |
| Click on latest Merchandise Return | Return Merchandise Authorization (RMA) displays |
| Change status of MR from "Waiting for confirmation" to "Waiting for package" > Save | In BO : Merchandise Return tab in Order -> Status changed<br><br>In FO : Merchandise Return page -> Status changed |
| Go to RMA page > Change status of MR from "Waiting for package" to "Package received" > Save | In BO : Merchandise Return tab in Order -> Status changed<br><br>In FO : Merchandise Return page -> Status changed |
| Go to RMA page > Change status of MR from "Package received" to "Return denied" OR "Return completed" > Save | In BO : Merchandise Return tab in Order -> Status changed<br><br>In FO : Merchandise Return page -> Status changed |
