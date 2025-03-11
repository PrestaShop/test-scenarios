---
title: "BO - Cart rules - Actions - Apply a discount to Selected product(s) "
weight: 9
---

# BO - Cart rules - Actions - Apply a discount to Selected product(s) 
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10325

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Select in Conditions >Product selection | The product selection button is displayed |
| Click on product selection button>Add a rule concerning>Click on button add | The product field is displayed |
| Click on the choose button | A modal is displayed |
| Add products | The 3 products are displayed |
| Close modal | The modal is closed" <br><br> <br><br>The product(s) are matching one of these: <br><br>Products=3 |
| Click on Tab "Actions"> Apply a percentage discount with an ‘selected product' | Succes Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart>Click on the Proceed to checkout | Discount is apply to selection product<br><br>See in cart :<br>|1 item|€22.68|<br>|Discount(s)|- €4.54|<br>|Shipping|Free|<br>|Total (tax incl.)|€18.14|<br>| Test| -€4.54| |
| Click on Tab "Actions"> Apply a negative percentage discount with an ‘selection product' | error Message is displayed: "There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid.<br><br>" |
| Click on Tab "Actions"> Apply a percentage with special characters and letters discount with an ‘selection product' | Error Message is displayed: "The reduction_percent field is invalid." |
| Click on Tab "Actions"> Apply a percentage discount with an ‘selection product' | Succes Message is displayed: "Successful update" |
| Click on View my store > Add a product  not part of the selection to the cart | Discount isn't apply to product<br><br>See in cart :<br> <br> <br>|1 item|€34.46|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.46| |
| Home> Add a product   selected >Click on proceed to checkout | Discount is apply to product selected <br><br>See in cart :<br> <br>|2 items|€45.62|<br>|Discount(s)|- €11.34|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.46|<br>|Test|-€11.34| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
