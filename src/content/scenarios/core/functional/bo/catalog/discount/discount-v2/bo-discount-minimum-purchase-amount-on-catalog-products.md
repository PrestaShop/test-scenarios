---
title: "BO - Discount - Minimum purchase amount (On catalog products)"
weight: 2
---

# BO - Discount - Minimum purchase amount (On catalog products)
## Details
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-12393

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount | Select discount page displayed |
| Choose type and click to "Create discount" | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Error Message: The field names is required at least in your default language. |
| Fill form and save | Discount page displayed<br><br>Error Message: This value should be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Error Message: This value should be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Error Message: Please enter a valid money amount. |
| Fill form and save | Discount page displayed<br><br>Error Message: Reduction value "0" is invalid. It must be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Error Message: Reduction value "-20" is invalid. It must be greater than 0. |
| Fill form and save | Discount page displayed<br><br>Successful Message: Successful update<br>Discount list = 1 |
| Click on “view my store”> Add a product > enter discount code | Error message: The minimum amount to benefit from this promo code is €50.00. |
| Go back to home page > Click on a product > Add to cart > Proceed to checkout> Add promo Code | We have this result :<br>2 items €69.26<br>Discount(s) -€10.00<br>Shipping Free<br>Total (tax incl.) €59.26<br>test -€10.00 |
| Go back to BO > Catalog > Discount > Click to edit button discount > Change discount value | Sucessfull message: Successful update |
| Click on “view my store”> Go to cart > refresh page | We have this: <br>2 items €69.26<br>Discount(s) -€12.00<br>Shipping Free<br>Total (tax incl.) €57.26<br>test -€12.00 |
| Go back to BO > Catalog > Discount > Click to delete button discount | Display of the confirmation modal |
| Click to Delete | Successful deletion notification |
| Go to FO > Go to shopping cart | We have this :<br><br>2 items €69.26<br>Shipping Free<br>Total (tax incl.) €69.26 |
