---
title: "BO - Cart rules - Actions - Apply a discount to Selected product(s) "
weight: 9
---

# BO - Cart rules - Actions - Apply a discount to Selected product(s) 
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10325

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| In Information tab, enter a Name > Go to Conditions tab | Condition tab is displayed |
| In Restrictions, check Product selection > Click on button "+ Product selection" | A new section in Product selection is displayed |
| In Add a rule concerning > Click on Choose button > Select Products > Click on Add | A new line is displayed : "The product(s) are matching one of these:" |
| Click on Choose > Add products > Click outside the modal | See "The product(s) are matching one of these: 3" |
| Click on Tab "Actions" > Apply a Percent (%) discount > Check Selected products > Click Save and stay | Success Message is displayed: "Successful creation" |
| Click on View my store > Add "Brown bear cushion" product to the cart > Click on the Proceed to checkout | Discount is applied to selected product.<br><br>See in cart :<br>|1 item|€22.68|<br>|Discount(s)|- €4.54|<br>|Shipping|Free|<br>|Total (tax incl.)|€18.14|<br>|Test| -€4.54| |
| Go back to Cart rule edition page > Apply a negative percentage discount > Click Save | error Message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid." |
| Apply a percentage discount with special characters and letters > Click Save | Error Message is displayed: "The reduction_percent field is invalid." |
| Click on Tab "Actions" > Apply a Percent (%) discount > Check Selected products > Click Save | Success Message is displayed: "Successful update" |
| Go back to FO > Add another product to the cart > Proceed to checkout | Discount is applied to the cart<br><br>See in cart :<br><br>|2 items|€36.96|<br>|Discount(s)|-€4.54|<br>|Shipping|Free|<br>|Total (tax incl.)|€32.42|<br>|Test|-€4.54| |
| Delete Brown bear cushion | Discount isn't applied to the cart<br><br>See in cart :<br><br>|1 item|€34.46|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.46| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
