---
title: Enable disable Product Image
weight: 3
---

## Preconditions

Prestashop installed\
login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Delivery slips page | page title contain 'Delivery Slips' |
| enable product image displayed in delivery slips | Successful update message is displayed |
| Go to FO and create order | Order confirmed page is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated |
| download the delivery slip | PDF contain products images |
| disable product image displayed in delivery slips | Successful update message is displayed |
| Go to FO and create order | Order confirmed page is displayed |
| Go to orders page | page title contain 'Orders' |
| Go to first order in list (the last created one) | page title contain 'Order :' |
| update order status to shipped | order status is updated |
| download the delivery slip | PDF does not contain products images |
