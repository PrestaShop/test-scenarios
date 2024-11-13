---
title: "BO - Order creation - Create simple order"
weight: 1
---

# BO - Order creation - Create simple order
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-749

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed |
| choose product with quantity = 4 and add it to cart | The product table is displayed, the Shipping block is displayed and the summary block is displayed |
| Choose delivery method (free) | Delivery method is selected |
| Choose Payment method | Payment method is selected |
| Choose order status | Order status is selected |
| Add an Order message and Click on "Create the order" | The order details page is displayed with exact data:<br> # Order status<br> # Order Price<br> # Shipping Address<br> # Invoice Address<br> # Product name<br> # Messages |
