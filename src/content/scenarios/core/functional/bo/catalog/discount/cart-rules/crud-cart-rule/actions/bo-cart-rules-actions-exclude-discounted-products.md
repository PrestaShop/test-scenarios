---
title: "BO - Cart rules - Actions - Exclude discounted products"
weight: 10
---

# BO - Cart rules - Actions - Exclude discounted products
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10326

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions" >Percentage > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product Exclude discounted products to the cart > Click on Proceed to checkout | Error message is displayed :"You cannot use this voucher on products on sale"<br>see in cart:<br>|1 item|€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94| |
| Go home>Add a product that does not have a discount>Click on proceed to checkout | See in the cart:<br> <br>|2 items|€57.74|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€40.34|<br>|test cart rules|-€17.40| |
| Delete a product with discount | See in the cart:<br><br> <br>|1 item|€34.80|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€17.40|<br>|test cart rules|-€17.40| |
| Go back to cart rule edition page > Click on Tab Actions > Set Value percentage  = -50 > Save | Error message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid.<br><br>" |
| Go to cart rule edition page > Click on Tab Actions > Set Value = -ar'(> Save | Error message is displayed: "The reduction_percent field is invalid." |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
