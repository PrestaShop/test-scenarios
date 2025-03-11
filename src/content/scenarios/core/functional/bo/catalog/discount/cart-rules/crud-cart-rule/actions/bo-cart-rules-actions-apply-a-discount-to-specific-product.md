---
title: "BO - Cart rules - Actions - Apply a discount to Specific product"
weight: 7
---

# BO - Cart rules - Actions - Apply a discount to Specific product
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10323

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions" | Succes Message is displayed: "Successful creation" |
| Apply a percentage discount with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Click on View my store > Add a product to the cart>Click on proceed to checkout | Discount is apply to specific product  See in cart :<br>|1 item|€16.68|<br>|Discount(s)|€8.34|<br>|Shipping|Free|<br>|Total (tax incl.)|€8.34|<br>| Test| €8.34 | |
| Go back to cart rule edition page >Apply a 100 percentage with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product  See in cart :<br><br> <br> <br> <br>|1 item|€16.68|<br>|Discount(s)|-€16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€0.00|<br>| Test|-€16.68| |
| Go back to cart rule edition page >Apply a negative percentage discount with an ‘specific product' | Error Message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid." |
| Go back to cart rule edition page >Click on Tab "Actions">Apply a percentage with special characters and letters> discount with an ‘specific product' | Error message: "The reduction_percent field is invalid." |
| Apply a amount (tax incl) discount with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product  See in cart :<br>|1 item|€16.68|<br>|Discount(s)|€10.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€6.68|<br>| Test| -€10 | |
| Go back to cart rule edition page >Apply a amount (tax excluded) discount with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product  See in cart :<br>|item|€16.68|<br>|Discount(s)|-€12.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€4.68|<br>| Test| -€12| |
| Go back to cart rule edition page >Apply an amount greater than the basket total discount with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product  See in cart :<br> <br>|1 item|€16.68|<br>|Discount(s)|-€16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€0.00|<br>| Test|-€16.68| |
| Go back to cart rule edition page >Apply an amount with an ‘specific product' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page> Add another product>Click on proceed to checkout | Discount is apply to specific product  See in cart :<br><br> <br>|2 items|€39.62|<br>|Discount(s)|- €12.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€27.62|<br>| Test|-€12.00 | |
| In Shopping cart edition >delete the specific product | Discount isn't apply <br><br> See in cart :<br><br> <br>|1 item|€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
