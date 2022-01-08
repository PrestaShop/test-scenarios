---
title: "BO - Cart rules - Case 12 - Group customer restriction"
weight: 12
---

# BO - Cart rules - Case 12 - Group customer restriction
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br>1. Select Customer Group Selection: Unselected groups = Customer + Selected groups = Vistors + Guestss<br> # Actions:<br>1. Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart and click on Proceed to checkout | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert "You cannot use this voucher" is displayed |
| Add product to cart and Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied and the total is ok |
| Remove discount | The discount is well removed |
| Remove product | The product is well removed |
