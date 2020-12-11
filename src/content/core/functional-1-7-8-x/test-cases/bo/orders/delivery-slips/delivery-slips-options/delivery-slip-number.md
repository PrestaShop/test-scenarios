---
title: Delivery Slip Number
weight: 2
---

## Preconditions

Prestashop installed\
login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Delivery slips page | page title contain 'Delivery Slips' |
| change the Delivery slip number | Successful update message is displayed |
| Go To FO and create order | Order confirmed page is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated<br>delivery slips file name contain the delivery sips number |
