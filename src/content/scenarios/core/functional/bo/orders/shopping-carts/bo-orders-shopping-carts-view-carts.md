---
title: "BO - Orders - Shopping carts - View carts"
weight: 4
---

# BO - Orders - Shopping carts - View carts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-776
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/03_viewCarts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Shopping carts page | The Shopping carts page is well displayed |
| In search field below "Order ID" column > Add "Non Ordered" (just created with pre-condition) > Click on "Search" button or Enter in your keypad | * Number of Shopping carts < Total of shopping carts<br> * The list contains the searched ID order (Non ordered) |
| Click on "View" button of this shopping cart | * The Shopping cart details page is well displayed<br> * Check data are ok:<br> ** Total<br> ** Customer Information<br> ** The button "Create order from this cart" is displayed<br> ** Products ordered |
| Click on "Create an order from this cart." button | "Create order" page is displayed |
| Scroll down to the page > Add a "Payment" and "Order status" > Click on "Create order" button | "Order detail" page is displayed |
| Go back to "Shopping Carts" page > In search field below "Order ID" column > Add the id of another order created > Click on "Search" button or Enter in your keypad | * Number of Shopping carts < Total of shopping carts<br> * The list contains the searched ID order |
| Click on "View" button of this shopping cart | * The Shopping cart page is well displayed<br> * Check data are ok:<br> ** Total<br> ** Customer Information<br> ** Order ID<br> ** Products ordered |
| Click on the "Order ID" link | Order details page is displayed |
| Go back to BO > Orders > Shopping carts page > Click on "Reset" button to clear filter | Number of Shopping carts = Total of shopping carts |