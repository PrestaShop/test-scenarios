---
title: "BO - Cart rules - Actions - Apply a discount to Cheapest product"
weight: 8
---

# BO - Cart rules - Actions - Apply a discount to Cheapest product
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10324

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions"> Apply a percentage discount with an ‘Cheapest product' | Succes Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart>Click on proceed to checkout | Discount is apply to Cheapest product<br><br>See in cart :<br> <br>|2 items|€51.48|<br>|Discount(s)|- €8.34|<br>|Shipping|Free|<br>|Total (tax incl.)|€43.14|<br>| Test| -€8.34 | |
| Go back to cart rule edition page >Apply a 100 percentage with an ‘Cheapest product'' | Succes Message is displayed: "Successful update" |
| Go back to shopping cart page | Discount is apply to Cheapest product<br><br>See in cart :<br>|2 items|€51.48|<br>|Discount(s)|- €16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>| Test| -€16.68 | |
| Go back to shopping cart page | Discount is apply to Cheapest product<br><br>See in cart :<br>|2 items|€51.48|<br>|Discount(s)|- €16.68|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>| Test| -€16.68 | |
| delete products in basket>home >add a product >Click on proceed to checkout | Discount is apply <br><br>See in cart :<br><br> <br>|1 item|€14.28|<br>|Discount(s)|- €7.14|<br>|Shipping|Free|<br>|Total (tax incl.)|€€7.14|<br>| Test|-€7.14 | |
| Add the same product to the basket a second time | Discount is apply <br><br>See in cart :<br>|2 items|€28.56|<br>|Discount(s)|- €7.14|<br>|Shipping|Free|<br>|Total (tax incl.)|€21.42|<br>| Test|-€7.14 | |
| Go back to cart rule edition page >Apply a negative percentage with an ‘Cheapest product'' | Error Message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid." |
| Go to cart rule edition page >Apply a letters and special characters percentage with an ‘Cheapest product'' | Error Message is displayed: "The reduction_percent field is invalid." |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
