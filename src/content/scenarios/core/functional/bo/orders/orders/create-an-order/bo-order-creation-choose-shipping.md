---
title: "BO - Order creation - Choose Shipping"
weight: 9
---

# BO - Order creation - Choose Shipping
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-756
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/createOrders/09_chooseShipping.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template/add-new-order

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > click Add new order > Search a customer and choose it | Check that the Shipping block is not displayed |
| Search a product and choose it > Scroll down to Block Shipping | Check:<br> * Delivery option = Shop name - Pick up in Store<br> * Shipping price (Tax incl.) = 0.00<br> * Free shipping is disabled<br> * Recycled packaging is disabled<br> * Gift is disabled<br> * Gift message = empty text |
| Click on dropdown to choose a Shipping method = My carrier | In the Shipping block: Shipping price will update = 8.40 *tax included*<br><br>In Summary block:<br> * The Total shipping price will be updated to = 7 *tax excluded*<br> * The *Total (Tax excl.)* is well updated = *Total products + Total shipping (Tax excl.)* |
| Enable Free shipping | In the discount block: a new line is added with the name = Free Shipping and the value =0<br><br>In the Shipping block: the shipping price is now 0<br><br>In Summary block:<br> * the shipping price will update to 0 too<br> * The total tax excluded is well updated |
| Enable Recycled packaging | The Recycled packaging is now enabled |
| go back to create order page and Enable the Gift | The gift option is enabled<br><br>In the summary block:<br> the *Total (tax excluded)* is updated =  Total product + Gift-wrapping price ( added in the pre-condition)<br> the *Total (tax included)* is updated = *Total (tax excluded)* + Tax |
| In the Gift message, set a faker message | The message is well displayed |
| Choose a payment, select an order status and click on create order | The order view page is well displayed<br><br>In the status block: the Recycled packaging and the Gift wrapping are well displayed<br><br>In the Carrier block: the gift message is well displayed |
| Go to FO > Sign in the customer and go to Your account > Order History page | The Order history page is well displayed |
| Click on details for last order created | The order details page is displayed and check:<br><br>* You have given permission to receive your order in recycled packaging.<br>* You have requested gift wrapping for this order.<br>* Message $Your_gift_mesage_expression |
| Go to BO > Orders > Orders > click Add new order > Search a customer and choose it > Search a product & click on it | Check that the Shipping block is well displayed |
