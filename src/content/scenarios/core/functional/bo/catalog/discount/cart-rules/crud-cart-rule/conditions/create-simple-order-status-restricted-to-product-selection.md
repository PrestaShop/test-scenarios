---
title: "Create simple order status restricted to Product selection"
weight: 1
---

# Create simple order status restricted to Product selection
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The Cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields:<br> # Information:<br> ## Name<br> ## Description<br> # Conditions <br> ## Check Product Selection <br> #  Actions:<br> ## Discount = 20%<br> ## Apply a discount to Order (without shipping) <br><br>and click on Save | An alert "Successful creation." is displayed |
| Go to FO | The FO is well displayed |
| Add product "Mountain fox notebook" to cart | The modal "Product successfully added to your shopping cart" is displayed |
| Add two other product | The modal "Product successfully added to your shopping cart" is displayed |
| Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well aplied for all the product <br><br>Total is ok |
| Remove a product from the Shopping cart page except Mountain fox notebook | The product is well removed and the discount is still there |
| Remove the product " Mountain fox notebook"  from the Shopping cart | The product is well removed and the discount has disappeared |
| Remove the last product from the Shopping cart | The product is well removed |
| Go back to the BO > Cart rules page | The cart rules page is well displayed |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
