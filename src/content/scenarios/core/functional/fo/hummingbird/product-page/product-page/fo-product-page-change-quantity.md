---
title: "FO - Product Page - Change quantity"
weight: 2
---

# FO - Product Page - Change quantity
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6970
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/02_changeQuantity.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On FO > Click on The best is yet to come' Framed poster product | The best is yet to come' Framed poster product page displayed |
| Click on the minus ( - ) button for quantity | Quantity doesn't change.<br>Quantity = 1 |
| Click on the plus ( + ) button quantity > Add to cart | Product successfully added to your shopping cart<br><br>Quantity in cart = 2 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>Quantity in cart = 3 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>Quantity in cart = 15 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>Quantity in cart = 16 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>Quantity in cart = 17 |
| Proceed to checkout > Click on Remove | The best is yet to come' Framed poster has been removed from the cart. |
