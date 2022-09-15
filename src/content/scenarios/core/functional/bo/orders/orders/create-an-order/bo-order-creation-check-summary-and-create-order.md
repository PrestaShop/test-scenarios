---
title: "BO - Order creation - Check Summary and create order"
weight: 10
---

# BO - Order creation - Check Summary and create order
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders > Click Add new order > Choose existing customer | Check that Summary block is not visible |
| Add product to cart | Check that summary block is visible<br><br>Check Summary > *Total Product* & *Total (Tax excl.)* should be equal<br><br>*Total (Tax incl.)* should be equal to ** *Total taxes* + *Total (Tax excl.)* |
| Add a voucher | See in Summary that *Total vouchers (Tax excl.)* has been updated |
| Delete voucher | *Total vouchers (Tax excl.)* equal to 0<br><br>*Total (Tax incl.)* should be updated |
| Change Delivery Option with a not free carrier | *Total shipping (Tax excl.)* will be updated<br><br>Price should be tax excluded<br><br>*Total (Tax incl.)* should be updated |
| Case1<br><br>The payment is not selected (Choose by default), click on Create Order | The order is not created, the payment is required |
| Case2<br><br>The Order status is not selected (Choose by default), click on Create Order | The order is not created, the order status is required |
| Fill in "Order message" > Add a payment > Choose an order status > Click "more actions" > Choose "Send pre-filled order to the customer by email" | Message The email was sent to your customer. appears |
| Fill in "Order message" > Add a payment > Choose an order status > Click "more actions" > Choose "Proceed to checkout in the front office" | FO opens with Step 2 of checkout process |
| Come back to BO > Fill in "Order message" > Add a payment > Choose an order status > Click button Create Order | Order will be created - Order details will be opened in BO<br><br>In the Messages block > Check the Order message is well displayed |
