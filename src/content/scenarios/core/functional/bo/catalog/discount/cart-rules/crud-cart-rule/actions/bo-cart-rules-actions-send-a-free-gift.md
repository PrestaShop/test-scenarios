---
title: "BO - Cart rules - Actions - Send a free gift"
weight: 11
---

# BO - Cart rules - Actions - Send a free gift
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10327

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart > Click on Proceed to checkout | The gift is added.<br><br>See in shopping cart :<br>Hummingbird - Vector graphics is marked as Gift<br>Hummingbird printed t-shirt costs €22.94<br><br>See in the cart:<br>|2 items|€33.74|<br>|Discount(s)|-€10.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94|<br>|Test|-€10.80| |
| Search product Hummingbird - Vector graphics in FO > Add it to the cart > Proceed to checkout | See in shopping cart :<br>1 Hummingbird - Vector graphics is marked as Gift<br>1 Hummingbird - Vector graphics costs €10.80<br>Hummingbird printed t-shirt costs €22.94<br><br>See in the cart:<br>|2 items|€33.74|<br>|Discount(s)|-€10.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€22.94|<br>|Test|-€10.80| |
| Go back to BO - Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
