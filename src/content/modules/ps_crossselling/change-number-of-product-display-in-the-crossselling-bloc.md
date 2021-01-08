---
title: Change number of product display in the crossselling bloc
weight: 2
---

## Preconditions

On FO create an order with more than 8 products and in the BO change status to payment accepted\
\
Go to back office -> Modules -> Module manager\
Search ps_crossselling\
The module should be installed and upgraded to the last version\
Click on Configure
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Change the option from 8 to 5 and click on the button save | A message should appear |
| Go to the front office and select a product | FO and product page should be displayed |
| Check the footer | Number of product should be 5 |
| Change the option from 5 to 10 and click on the button save | A message should appear |
| Go to the front office and select a product | FO and product page should be displayed |
| Check the footer | Number of product should be 5 |
