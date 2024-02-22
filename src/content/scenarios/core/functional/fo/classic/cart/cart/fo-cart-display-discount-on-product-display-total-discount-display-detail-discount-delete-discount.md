---
title: "FO - Cart - Display discount on product, Display total discount, Display detail discount, Delete discount"
weight: 6
---

# FO - Cart - Display discount on product, Display total discount, Display detail discount, Delete discount
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1284

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discount | Cart Rules page displayed |
| Click on "Add new cart rule" | New cart rule creation page displayed |
| Fill the form and click to Save | Successful creation |
| Click on "Add new cart rule" | New cart rule creation page displayed |
| Fill the form and click to Save | Successful creation |
| On FO > search "note" | There are 3 products |
| Quickview of mountain fox notebook > Add to cart | h4. __Product successfully added to your shopping cart |
| click to continue shopping | Search result page<br><br>There are 3 products |
| Quickview of Brown bear notebook > Add to cart | h4. __Product successfully added to your shopping cart |
| Click to Proceed to checkout | Shopping cart page displayed<br><br>2 items (Mountain fox notebook and Brown bear notebook) |
| Click to add promo code, fill the input and click to Add | Discount added <br><br>Discount(s) = - €2.32<br><br>Total (tax incl.) = €28.64<br><br>test = -€2.32 |
| Click to add promo code, fill the input and click to Add | Discount added <br><br>Discount(s) = - €17.32<br><br>Total (tax incl) = €13.64<br><br>test = -€2.32<br><br>test2 = -€15.00 |
| Delete test2 | Discount(s) = - €2.32<br><br>Total (tax incl.) = €28.64<br><br>test = -€2.32 |
| Delete test | Total (tax incl.) = €30.96 |
| Delete all the product | There are no more items in your cart |
