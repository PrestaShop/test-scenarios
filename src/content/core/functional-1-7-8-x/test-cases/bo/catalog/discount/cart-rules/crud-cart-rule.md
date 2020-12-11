---
title: CRUD cart rule
weight: 1
---

## Preconditions

Etre sur le BO
## Steps

Go to BO => Catalog => Discounts => Cart rules page => OK\
\
Create a cart rule =>\
2.1 without code => ok\
2.2 with Code => ok\
2.3 Highlight enabled => ok\
2.4 Highlight disabled => ok\
2.5 Partial use enabled => ok\
2.6 Partial use disabled => ok\
2.7 Priority => ok\
2.8 Status enabled => ok\
2.9 Status disabled => ok\
2.10 Limit to a single customer => ok\
2.11 Valid date => ok\
2.12 Total < Minimum amount => ok\
2.13 Total > Minimum amount => ok\
2.14 Total available => ok\
2.15 Total available for each user => ok\
2.16 Restrictions\
2.16.1 Country selection => ok\
2.16.2 Carrier selection => nok as reported here: https://github.com/PrestaShop/PrestaShop/issues/20705 due to this issue: https://github.com/PrestaShop/PrestaShop/issues/9688\
2.16.3 Customer group selection => ok\
2.16.4 Product selection => ok\
2.16.5 Compatibility => nok https://github.com/PrestaShop/PrestaShop/issues/17603\
2.17 free shipping => nok https://github.com/PrestaShop/PrestaShop/issues/15458\
2.18 Percent discount =>\
2.18.1 Order (without shipping) => NOK https://github.com/PrestaShop/PrestaShop/issues/20690 (Regression)\
2.18.2 Specific product => ok\
2.18.3 Cheapest product => ok\
2.18.4 Selected product => ok\
2.18.5 Exclude discounted products => nok https://github.com/PrestaShop/PrestaShop/issues/19090\
2.19 Amount discount => ok\
2.19.1 Order (without shipping) => NOK: Combine free gift + percent discount => ok\
2.19.2 Specific product => ok\
2.20 Free gift => ok\
2.21 Click on Save and Stay button => ok\
2.22 Click on Save button => ok\
2.23 Generate Code button => OK

## Expected result

Le crud de cart rules fonctionne correctement

