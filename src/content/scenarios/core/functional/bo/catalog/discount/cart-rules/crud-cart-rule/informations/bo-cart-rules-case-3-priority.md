---
title: "BO - Cart rules - Case 3 - Priority"
weight: 3
---

# BO - Cart rules - Case 3 - Priority
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Created a new discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Priority = 2<br> # Actions:<br>1. Discount = 1 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Create another discount, set these fields:<br> # Information:<br>1. Name<br>2. Description<br>3. Priority = 1<br> # Actions:<br>1. Discount = 2 Euro tax included<br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | Check that Cart rule n°2 is applied before Cart rule n°1, Total is OK |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rules with bulk action and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
