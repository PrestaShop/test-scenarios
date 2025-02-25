---
title: "BO - Cart rules - Actions - Apply a discount percent(%)"
weight: 3
---

# BO - Cart rules - Actions - Apply a discount percent(%)
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10319

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information > Click on Save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Click on Save | Success Message is displayed: "Successful creation" |
| Click on  "View my store" > Add a product to the cart | The discount applies to the product in the cart with free shipping |
| Go back to cart rule edition page > Click on Tab Actions > Set Value = 100% > Save | Success Message is displayed: "Successful update" |
| Go back to FO > Refresh Shopping cart page | In Shopping Cart, we will have 0 as the total to pay<br><br> <br>|Subtotal|€34.46|<br>|Discount(s)|-€34.46|<br>|Shipping |Free|<br>|Total (tax incl.)|€0.00|<br>|Test |-€34.46| |
| Go back to cart rule edition page > Click on Tab Actions > Set Value = -50% > Save | Error message : <br>There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid. |
| Click on Tab Actions > Set Value = ù^$% > Save | Error Message "The reduction_percent field is invalid." |
| Click on Tab Actions > Set Value= ze > Save | Error Message "The reduction_percent field is invalid." |
| Click on Tab Actions > Set Value= 600 > Save | Error message : <br>There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid. |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
