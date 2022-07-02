---
title: "BO - Cart rules - Case 11 - Carrier restriction"
weight: 10
---

# BO - Cart rules - Case 11 - Carrier restriction
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Code<br> # Conditions:<br>1.Select Carrier: PrestaShop unselected carrier + My carrier selected carriers<br> # Actions:<br>1. Discount = 100 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | An alert "You must choose a carrier before applying this voucher to your order" is displayed |
| Click on "Proceed to checkout" | The Checkout page is displayed, The Addresses step is displayed |
| Select Mon Address (France) and click continue | The shipping method is displayed |
| Select My Carrier and click Continue | The payment method is displayed |
| Click on "Have a promo code?" | The promo code section is displayed |
| Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the product | Product well removed |
