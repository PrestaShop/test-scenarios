---
title: "FO - Checkout - Display of highlighted cart rules"
weight: 4
---

# FO - Checkout - Display of highlighted cart rules
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1296

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts > Add a new cart rule | the cart rule creation page displayed |
| fill in the form and click on "Save" | "Successful creation" notification |
| On FO > Add product to cart > Click on "Proceed to checkout" | The shopping rule page displayed |
| Click on "Have a promo code?" | Promo code input, "Add" button and "Close" button displayed<br><br> <br><br>Take advantage of our exclusive offers:<br><br>1234 - KDO |
| click to "1234" | Promo code input = 1234 |
| click to "Add" | Discount "KDO" displayed<br><br>Deleted button displayed<br><br>Discount(s) : - €5.00<br><br> <br><br>Total (tax incl.) = item price - 5 € |
| Click on delete button | Discount delete<br><br>Total (tax incl.) = item price |
