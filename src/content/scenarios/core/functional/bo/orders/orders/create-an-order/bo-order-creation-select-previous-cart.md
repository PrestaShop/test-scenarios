---
title: "BO - Order creation - Select previous Cart"
weight: 4
---

# BO - Order creation - Select previous Cart
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3096
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/04_selectPreviousCarts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers > Edit John Doe > Add a new password > Save | Message "Successful update." appears |
| Go to FO > Log into John Doe's account | You are logged into John doe's account |
| Add products to your cart |  |
| Go to BO > Orders > Orders > Add new order > Choose customer John Doe > Click Details on the cart > Click the cross to close the popup | Popup opens with Total Cart - Customer information - Order information - Cart Summary |
| Click Use on the created cart | Block cart is updated with the products of the previously created cart |
| Finalize order | New order is created |
