---
title: "BO - Cart rules - Actions - Send a free gift"
weight: 11
---

# BO - Cart rules - Actions - Send a free gift
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10327

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for in Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart > Click on Proceed to checkout | The gift is add to the cart <br><br>See in the cart:<br> <br>|2 items|€33.74|<br>|Discount(s)|- €22.27|<br>|Shipping|Free|<br>|Total (tax incl.)|€11.47|<br>|test cart rules| -€22.27 | |
| Go back to the BO>Click on Tab "Actions"  > Save | Success Message is displayed: "Successful update" |
| Go back to the shopping cart edition >Refresh | The gift is added to the cart <br><br>See in the cart: we have 2 same products (1 product is a gift )<br> <br> <br>|2 items|€45.89|<br>|Discount(s)|-€22.94|<br>|Shipping|Free|<br>|Total (tax incl.)|€€22.95|<br>|test cart rules|-€22.94| |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
