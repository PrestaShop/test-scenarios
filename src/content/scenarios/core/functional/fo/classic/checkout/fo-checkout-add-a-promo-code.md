---
title: "FO - Checkout - Add a promo code"
weight: 2
---

# FO - Checkout - Add a promo code
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1294

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts > Add a new cart rule | the cart rule creation page displayed |
| fill in the form and click on "Save" | "Successful creation" notification |
| On FO > Add product to cart > Click on "Proceed to checkout" | The shopping rule page displayed |
| Click on "Have a promo code?" | Promo code input, "Add" button and "Close" button displayed |
| fill the Promo code input and click to "Add" | Discount "KDO" displayed<br><br>Deleted button displayed<br><br>Discount(s) : - €5.00<br><br> <br><br>Total (tax incl.) = item price - 5 € |
| Click on delete button | Discount delete<br><br>Total (tax incl.) = item price |
