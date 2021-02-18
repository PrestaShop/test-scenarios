---
title: Product block
weight: 2
---
## Steps

Check Number of products => ok\
Update the price of an ordered => ok\
Update the quantity of an ordered product=> ok\
Update quantity out of stock not allowed => ok\
Update quantity out of stock allowed => ok\
Add all types of a product (standard simple product / product with combinations / pack / virtual product)\
Add a product with minimal quantity => ok\
Add an out stock product with allowed order => ok\
Add an out stock product with not allowed order => ok\
Add a product with a specific price\
Delete a product => ok\
Check Item per page => ok ( dans le cas item < 8 / items > 8 ) change it\

-------------------\
Number of products => ok\
Update the price of an ordered product => ok\
Update the quantity of an ordered product => NOK https://github.com/PrestaShop/PrestaShop/issues/23265\
Update quantity out of stock not allowed => NOK\
Update quantity out of stock allowed => ok\
Add a standard simple product => ok\
Add the same product => ok\
Add a product with combinations => ok\
Add a vector product => ok\
Add a pack => ok\
Add a customized product => ok\
Add a product with minimal quantity => ok\
Add a product out of stock not allowed => ok\
Add a product out of stock allowed => ok\
Add a product with specific price => NOK\
https://github.com/PrestaShop/PrestaShop/issues/22580\
Delete a product => ok\
Check item per page => ok\
Ecotax issue: https://github.com/PrestaShop/PrestaShop/issues/22029

