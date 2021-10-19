---
title: "BO - Cart rules - Case 10 - Country restriction"
weight: 11
---

# BO - Cart rules - Case 10 - Country restriction
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Countries page and searched for "United States | The page is well displayed with the exact filter |
| Enable United states country with quick access | An alert "The status has been successfully updated." is displayed |
| Reset Filter | The filter is well reset |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br>3. Code<br># Conditions:<br>1. Countries restriction (France unselected + United states selected<br># Actions:<br>1. Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert is displayed "You cannot use this voucher in your country of delivery" |
| Click on "Proceed to checkout" | The Checkout page is displayed, The Addresses step is displayed |
| Select My Address (United States) and click continue | The shipping method is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount | The discount is well removed |
| Remove the product | The product is well removed |
