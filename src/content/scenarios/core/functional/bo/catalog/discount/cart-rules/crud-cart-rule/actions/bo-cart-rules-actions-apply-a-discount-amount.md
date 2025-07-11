---
title: "BO - Cart rules - Actions - Apply a discount Amount"
weight: 4
---

# BO - Cart rules - Actions - Apply a discount Amount
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10320

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for in Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Message "Successful creation" is displayed |
| Click on View my store > Add a product to the cart > Click on Proceed to checkout | Shopping cart plage is displayed.<br>The discount amount should be displayed<br> <br>|1 item|€34.80|<br>|Discount(s)|- €20.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€14.80|<br>|test cart rules|-€20.00| |
| Go back to cart rule edition page > Click on Tab "Actions" > Edit Amount : Tax excluded > Save | Success Message is displayed: "Successful update" |
| Go back to shopping cart page >  Refresh | The discount amount should be displayed<br> <br> <br>|1 item|€34.80|<br>|Discount(s)|- €24.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€10.80|<br>|test cart rules|-€24.00| |
| Go back to cart rule edition page > Click on Tab "Actions" > Edit Amount : 100 EUR > Save | Success Message is displayed: "Successful update" |
| Go back to shopping cart page >  Refresh | The discount amount should be displayed<br> <br>|1 item|€34.80|<br>|Discount(s)|- €34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€0.00|<br>|test cart rules|-€34.80 | |
| Go back to cart rule edition page > Click on Tab Actions > Set Value = -50 > Save | Error message: "Reduction amount cannot be lower than zero." |
| On Tab Actions > Set Value = ab > Save | Error message: "The reduction_amount field is invalid." |
| On Tab Actions > Set Value = ù^)> Save | Error message: "The reduction_amount field is invalid." |
| On Tab Actions > Set Value = 0 > Save | Success message: "Successful update." |
| Go back to shopping cart page >  Refresh | The discount amount should be displayed<br> <br><br> <br>|1 item|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>|test cart rules|Free shipping| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
