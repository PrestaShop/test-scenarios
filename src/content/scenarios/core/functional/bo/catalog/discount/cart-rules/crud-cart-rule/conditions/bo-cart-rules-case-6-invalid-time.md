---
title: "BO - Cart rules - Case 6 - Invalid Time"
weight: 4
---

# BO - Cart rules - Case 6 - Invalid Time
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create a new discount, set these fields:<br><br># Information:<br>1. Name<br>2. Description<br># Conditions:<br>1. Set the "From" & "To" to an expired date<br># Actions :<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is not applied |
| Go back to the BO > Cart rules page, delete the voucher and confirm the deletion | A green alert "Successful deletion." is displayed |
