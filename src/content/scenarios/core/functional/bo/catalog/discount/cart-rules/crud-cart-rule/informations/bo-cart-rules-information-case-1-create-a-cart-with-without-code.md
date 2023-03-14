---
title: "BO - Cart rules - Information - Case 1 - Create a cart with / without Code"
weight: 1
---

# BO - Cart rules - Information - Case 1 - Create a cart with / without Code
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page and Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| *Case1: Without Code*<br><br>Set these fields and click on Save | An alert "Successful creation." is displayed |
| Go to FO,  Add product to cart and click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok |
| Remove the product from the Shopping cart page | The product is well removed |
| Go back to the BO > Cart rules page and Edit the last cart rule created | The Edit cart rule page is well displayed |
| *Case2: With Code and Highlight disabled*<br><br>Set these fields and click on Save | An alert "Successful update." is displayed |
| Go to FO,  Add product to cart and click on "Proceed to checkout" | The Shopping cart is well displayed and the link "Have a promo code?" is displayed |
| Click on "Have a promo code?" and Set the Code and click on Add | The discount is well applied & the total is ok |
| Remove the discount and remove the product | check that the discount is not applied and the total is ok <br><br>And the product is well removed |
| Go back to the BO > Cart rules page and Edit the last cart rule created | The Edit cart rule page is well displayed |
| *Case3: With Code and Highlight enabled*<br><br>Enable Highlight and save | A green alert "Successful update." is displayed |
| Go to FO,  Add product to cart and click on "Proceed to checkout" | The Shopping cart is well displayed, the promo code section is displayed, the cart rule name + code are displayed |
| Click on the "Code" and Click on Add | The discount is well applied & the total is ok |
| Remove the discount and remove the product | check that the discount is not applied and the total is ok <br><br>And the product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
