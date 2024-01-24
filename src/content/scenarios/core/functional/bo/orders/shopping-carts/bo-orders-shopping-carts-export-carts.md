---
title: "BO - Orders - Shopping carts - Export carts"
weight: 6
---

# BO - Orders - Shopping carts - Export carts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-778
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/04_exportCarts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Create multiple carts with different products |  |
| Go to BO > Orders > Shopping carts > Click on Export carts | A .csv file is downloaded with a filename format : cart_date_hour.csv |
| Open the .csv file and see the same info as in the BO |  |
