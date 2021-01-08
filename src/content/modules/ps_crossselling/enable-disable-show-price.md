---
title: Enable / Disable Show price
weight: 1
---

## Preconditions

On FO create an order with more than one product and in the BO change status to payment accepted\
\
Go to back office -> Modules -> Module manager\
Search ps_crossselling\
The module should be installed and upgraded to the last version\
Click on Configure
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to disable the option | The switch button should be red |
| Click on the button save | A message should appear |
| Go to FO and check a product | you should saw in the bloc crossselling product brought with this product without price |
| Click on the switch button to enable the option | The switch button should be blue |
| Click on the button save | A message should appear |
| Go to FO and check a product | you should saw in the bloc crossselling product brought with this product with price |
