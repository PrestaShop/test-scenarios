---
title: "BO - Cart rules - Actions - Apply a discount None"
weight: 5
---

# BO - Cart rules - Actions - Apply a discount None
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10321

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information > Click on Save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Click on "apply discount ":None  > Save | Error Message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Enable Free shipping  and Apply discount :None > Save | Success message :Successful creation |
| Click on View my store > Add a product to the cart | Shipping should be free. See in cart :<br> <br> <br>|1 item|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80|<br>|test cart rules|Free shipping| |
| Go back to cart rule edition page >Click on Tab "Actions"<br><br>Desabled free shipping<br><br>Enable Exclude discounted products > Apply discount: None >Save | Error message: "An action is required for this cart rule." |
| Go to cart rule edition page >Click on Tab "Actions" >Enabled free shipping > Enable Exclude discounted products > Apply discount: None> Save | Success message: Successful update |
| Click on View my store > Add a product to the cart | We have this in cart: <br><br> <br> <br><br><br> <br> <br> * <br><br> <br><br> <br>|1 item|€34.46|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.46|<br>|test cart rules|Free shipping| |
| Go back to cart rule edition page >Click on Tab "Actions"> free shipping>Desabled  Exclude discounted products > Apply discount: None >Enabled send a free gift  >Save | Sucess message: "Successful update" |
| Click on View my store > Add a product to the cart | We have this in cart: <br><br><br> <br> <br>|2 items|€48.74|<br>|Discount(s)|€14.28|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.46|<br>|test none |€14.28| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
