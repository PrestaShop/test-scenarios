---
title: "Choose Shipping"
weight: 9
---

# Choose Shipping
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > click Add new order > Choose Customer > Choose products > Scroll down to Block Shipping | Check:<br> * Delivery option = Shop name - Pick up in Store<br> * Shipping price (Tax incl.) = 0.00<br> * Free shipping disabled<br> * Recycled packaging disabled<br> * Gift disabled<br> * Gift message = empty text |
| Click on dropdown to choose a Shipping method = My carrier | In the Shipping block: Shipping price will update = 8.40 *tax included*<br><br>In Summary block:<br> * The shipping price will update too = 7 *tax excluded*<br> * **The *Total (Tax excl.)* is well updated = Total products *+* Total shipping (Tax excl.)** |
| Enable Free shipping | In the discount block: a new line is added with the name = Free Shipping<br><br>In the Shipping block: the shipping price is now 0<br><br>In Summary block:<br> * the shipping price will update to 0 too<br> * The total tax excluded is well updated |
| Enable Recycled packaging | The Recycled packaging is now enabled |
| Enable the Gift | The gift option is enabled<br><br>In the summary block the total tax excluded is updated =  Total product + Gift-wrapping price ( added in the pre-condition) |
| In the Gift message, set a faker message | The message is well displayed |
| Choose a payment, select an order status and click on create order | The order view page is well displayed<br><br>In the status block: the Recycled packaging is well displayed and the Gift wrapping is well displayed<br><br>In the Carrier block: the gift message is well displayed |
| If no shipping is available | Message No carrier can be applied to this order will appear<br><br>No further block, can't continue to create the order |
