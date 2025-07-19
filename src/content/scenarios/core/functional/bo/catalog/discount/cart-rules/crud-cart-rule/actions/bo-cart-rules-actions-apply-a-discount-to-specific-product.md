---
title: "BO - Cart rules - Actions - Apply a discount to Specific product"
weight: 7
---

# BO - Cart rules - Actions - Apply a discount to Specific product
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10323

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| In Information tab, add a Name > Click on tab Action, enter following data > Save | Success Message is displayed: "Successful creation" |
| Edit your cart rule > Go to Action tab > Add a discount for specific product with followingdata > Save | Success Message is displayed: "Successful update" |
| Click on View my store > Add the product to cart > Click on Proceed to checkout | Discount is applied to specific product. See in cart :<br>|1 item|€16.68|<br>|Discount(s)|-€8.34|<br>|Shipping|Free|<br>|Total (tax incl.)|€8.34|<br>| Test|-€8.34 | |
| Go back to cart rule edition page > Apply a 100% discount > Save and stay | Success Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product  See in cart :<br><br>|1 item|€16.68|<br>|Discount(s)|-€16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€0.00|<br>| Test|-€16.68| |
| Go back to cart rule edition page > Apply a negative percentage discount > Save and stay | Error Message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid." |
| Click on Tab "Actions" > Apply a percentage with special characters and letters > Save and stay | Error message: "The reduction_percent field is invalid." |
| Click on Tab "Actions" > Apply a discount Amount to a specific product > Save and stay | Success Message is displayed: "Successful update" |
| Go back to shopping cart page > Refresh | Discount is apply to specific product. See in cart :<br>|1 item|€16.68|<br>|Discount(s)|-€10.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€6.68|<br>|Test| -€10.00 | |
| Click on tab "Actions" > Apply a discount Amount to a Specific product | Success Message is displayed: "Successful update" |
| Go back to shopping cart page > Refresh | Discount is apply to specific product. See in cart :<br>|1 item|€16.68|<br>|Discount(s)|-€12.00|<br>|Shipping|Free|<br>|Total (tax incl.)|€4.68|<br>|Test|-€12.00| |
| Go back to cart rule edition page > Click on Tac Actions > Apply an discount Amount greater than the cart total with a specific product | Success Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to specific product. See in cart :<br> <br>|1 item|€16.68|<br>|Discount(s)|-€16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€0.00|<br>|Test|-€16.68| |
| Go to FO > Add a product (Hummingbird printed t-shirt) to cart > Proceed to checkout > Delete customizable Mug | Discount isn't apply.<br><br>See in cart :<br>|1 item|€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94| |
| Go to BO > Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
