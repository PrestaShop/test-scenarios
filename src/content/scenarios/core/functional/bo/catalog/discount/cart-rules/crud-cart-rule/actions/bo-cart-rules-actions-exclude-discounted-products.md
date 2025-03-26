---
title: "BO - Cart rules - Actions - Exclude discounted products"
weight: 10
---

# BO - Cart rules - Actions - Exclude discounted products
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10326

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rules page is displayed <br><br>Information tab is displayed |
| Entering data for in Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product  > Click on Proceed to checkout >Click on "Have a promo code?"> Entering the code "Test" | Error message is displayed :"You cannot use this voucher on products on sale"<br>see in cart:<br>|1 item|€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94| |
| Delete product in cart > Go home>Add a product >Click on proceed to checkout>Click on "Have a promo code?"> Entering the code "Test" | See in the cart:<br> <br>|1 item|€34.80|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€17.40|<br>|test cart rules|-€17.40| |
| Go home add a product>Click on proceed to checkout | See in the cart:<br> <br>|2 items|€57.74|<br>|Discount(s)|- €17.40|<br>|Shipping|Free|<br>|Total (tax incl.)|€40.34|<br>|Test|-€17.40| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
