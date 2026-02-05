---
title: "BO - Discount - Display an automatic catalog discount in the product catalog"
weight: 5
---

# BO - Discount - Display an automatic catalog discount in the product catalog
## Details
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-11202

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount --> on product catalog | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Notification :<br><br>Successful update<br><br>The discount has been created<br><br>Discount list = 1 |
| Go to FO | Product catalog displayed<br><br>Categorie On Sale displayed<br><br>Product with the discount displayed in categorie On Sale<br><br>flag on top left corner displayed<br><br> <br><br>Discount must be displayed in categorie On Sale and also elsewhere in the catalog |
| Click on the product (Mug Today is a good day) | Product page displayed<br><br>Discount displayed in the product details and in the top left corner of the image |
| Add to cart | h4. Product successfully added to your shopping cart |
| Proceed to checkout | shopping cart displayed<br><br> <br><br>Discount displayed in product summary |
| BO > Catalog > Discount | Discounts page should be displayed<br><br>discount list = 1 |
| Delete the discount | Display of the confirmation modal |
| Confirm the deletion | Display of the confirmation modal |
| Go to FO | Product catalog displayed<br><br>Category On Sale is not displayed |
