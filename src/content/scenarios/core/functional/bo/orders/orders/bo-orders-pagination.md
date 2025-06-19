---
title: "BO - Orders - Pagination"
weight: 10
---

# BO - Orders - Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-731
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/10_pagination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Bo > Orders > Orders list page | List of all Orders well displayed |
| Reset filter and get the number of all orders created | No filter was applied and the *NumOrder*= number of orders ( = 5+6 = 11 if it is a fresh install) |
| Change "items per page" to 10<br><br>Get the number of Pages = *NumPage* = up round (NumbOrder / 10), For example if we have 11 orders, NumPage  = 2 | Page reloads with 10 items on the first page<br><br>Buttons appear to go to the next page<br><br>The number of pages is correct |
| Click on the next button | The next page is well displayed and check (page 2 / *NumPage*) is correct |
| Click on Previous button | The first page is well displayed |
| Change "items per page" to 50 | Page reloads with all items on the first page = *NumOrder* orders<br><br>Only one page of orders is available |
| Change "items per page" to 10 | Page reloads with 10 items on the first page<br><br>Buttons appear to go to the next page<br><br>The number of pages is correct |
| *Sort* By Total  DESC | The first page is well sorted by total DESC |
| Click on next page | Check that the second page is well sorted by total DESC |
| Filter by the customer John Doe and Click Search | The order list should be filtered with the customer chosen<br><br>If < to "Items per page" : one page is available with no pagination<br><br>if > to "Items per page" : X pages are available to go through |
