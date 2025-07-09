---
title: "BO - Discount - Trigger based on the total quantity of products in the cart"
weight: 6
---

# BO - Discount - Trigger based on the total quantity of products in the cart
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-11279

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount<br>Choose "On cart amount" | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Error Message: The field names is required at least in your default language. |
| Fill form > Set quantity 0 > Save | Discount page displayed<br><br>Error Message: This value should be greater than 0. |
| Fill form > Set a negative quantity > Save | Discount page displayed<br><br>Error Message: This value should be greater than 0. |
| Fill form > Enter a letter > Save | We can't enter any letters and nothing appears in the quantity field. |
| Fill form > Enter a negative discount amount > Save | We have an error message: Reduction value "-10" is invalid. It must be greater than 0. |
| Fill form > Save | Discount page displayed<br><br>Successful Message: Successful update<br>Discount list = 1 |
| Click on “view my store”> Add a product > enter discount code | Error Message: You cannot use this voucher with these products |
| Go back to home page > Click on a product > Add to cart > Proceed to checkout> Add promo Code | We have this :<br><br>2 items€ 69.26<br>Discount(s) -€10.00<br>Shipping Free<br>Total (tax incl.) €59.26<br>test -€10.00 |
| Go back to BO > Catalog > Discount > Click to edit button discount > Change minimum product quantity and save | Sucessfull message: Successful update |
| Click on “view my store”> Go to basket > refresh page | The reduction no longer appears: <br>2 items€69.26<br>ShippingFree<br>Total (tax incl.)€69.26 |
| Go back to BO > Catalog > Discount > Click to edit button discount > Change amount discount and discount value> Tax excluded | Sucessfull message: Successful update |
| Click on “view my store”> Go to basket > refresh page | items€69.26<br>Discount(s) -€12.00<br>Shipping Free<br>Total (tax incl.) €57.26<br>test -€12.00 |
| Go back to BO > Catalog > Discount > Click to edit button > add a higher discount value to the basket total > Save | Message: Successful update |
| Click on “view my store”> Go to basket > refresh page | 2 items €69.26<br>Discount(s) -€69.26<br>Shipping Free<br>Total (tax incl.) €0.00<br>test -€69.26 |
| Go back to home page > Add 3 products > Proceed to checkout > | We have this: <br>4 items€127.00<br>Discount(s) -€100.00<br>Shipping Free<br>Total (tax incl.) €27.01<br>test -€100.00 <br><br>And we have a sucessfull message: Your order is confirmed |
| Go back to BO > Orders > orders > Click on the order we have just made > Modify order and delete all products except 1 | The discount has disappeared |
| Go catalog > Dicount > Click to delete button discount | Display of the confirmation modal |
| Click to Yes button | The discount is deleted |
