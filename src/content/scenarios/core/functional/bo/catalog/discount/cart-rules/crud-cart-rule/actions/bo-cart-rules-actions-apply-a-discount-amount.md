---
title: "BO - Cart rules - Actions - Apply a discount Amount"
weight: 4
---

# BO - Cart rules - Actions - Apply a discount Amount
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10320

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions" > Amount > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart | The discount amount should be displayed<br> <br> <br>|1 item|€34.80|<br>|Discount(s)|- €20.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€14.80|<br>|test cart rules|-€20.00| |
| Go back to cart rule edition page >Click on Tab "Actions" > Amount  (taxe excluded)> Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart | The discount amount should be displayed<br> <br> <br>|1 item|€34.80|<br>|Discount(s)|- €24.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€10.80|<br>|test cart rules|-€24.00| |
| Go back to cart rule edition page > Click on Tab Actions > Set Value = -50 > Save | Error message: "Reduction amount cannot be lower than zero." |
| Go to cart rule edition page > Click on Tab Actions > Set Value = ab> Save | Error message: "The reduction_amount field is invalid." |
| Go to cart rule edition page > Click on Tab Actions > Set Value =ù^)> Save | Error message: "The reduction_amount field is invalid." |
| Go to cart rule edition page > Click on Tab Actions > Set Value =0> Save | Sucess message: "Successful update." |
| Click on View my store > Add a product to the cart | The discount amount should be displayed<br> <br><br> <br>|1 item|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>|test cart rules|Free shipping| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
