---
title: "BO - Discount - Create a discount that applies automatically or via promo code "
weight: 10
---

# BO - Discount - Create a discount that applies automatically or via promo code 
## Details
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11288

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount<br>Choose "On cart amount" | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Error Message: The field names is required at least in your default language. |
| Fill form > Set amount discount 0 > Save | Discount page displayed<br><br>Error Message: Reduction value "0" is invalid. It must be greater than 0. |
| Fill form > Enter a negative discount amount > Save | Discount page displayed: <br><br>Reduction value "-20" is invalid. It must be greater than 0. |
| Fill form > Save | Discount page displayed<br><br>Successful Message: Successful update<br>Discount list = 1 |
