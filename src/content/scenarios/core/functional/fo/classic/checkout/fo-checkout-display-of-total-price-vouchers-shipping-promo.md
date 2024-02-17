---
title: "FO - Checkout - Display of total (price, vouchers, shipping, promo...)"
weight: 3
---

# FO - Checkout - Display of total (price, vouchers, shipping, promo...)
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1295

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts > Add a new cart rule | the cart rule creation page displayed |
| fill in the form and click on "Save" | "Successful creation" notification |
| On FO > Add product to cart > Click on "Proceed to checkout" | The shopping rule page displayed |
| Click on "Have a promo code?" | Promo code input, "Add" button and "Close" button displayed<br><br> <br><br>Take advantage of our exclusive offers:<br><br>1234 - KDO |
| click to "1234" | Promo code input = 1234 |
| click to "Add" | item = €14.28<br>Discount(s) = - €5.00<br>ShippingFree<br> <br>Total (tax incl.) = €9.28<br> * KDO -€5.00 <br><br>Deleted button displayed |
| Click on delete promo button | Discount delete<br><br>Total (tax incl.) = €14.28 |
| Click on delete product button | Product delete<br><br>"There are no more items in your cart"<br><br>Total (tax incl.) = €0 |
