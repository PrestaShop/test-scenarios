---
title: "FO - Product Page - Change quantity"
weight: 2
---

# FO - Product Page - Change quantity
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1257

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On FO > Click on  The best is yet to come' Framed poster product | The best is yet to come' Framed poster product page diplayed<br><br>Quantity = 1 |
| Click on the down arrow quantity | Quantity doesn't change. Quantity = 1 |
| Click on the top arrow quantity | Quantity = 2 |
| Scroll down 1 time | Quantity = 1 |
| Scroll up 1 time | Quantity = 2 |
| Change the quantity by input and click on Add to cart | Product successfully added to your shopping cart |
| Change the quantity by input > Write -24 > Click on Add to cart | Product successfully added to your shopping cart<br>1 more product is added to the cart. |
| Click on "Continue Shopping" | Modal is closed |
| Change the quatity by input > Write "prestashop" > Click on Add to cart | Only letter "e" is displayed.<br>Product successfully added to your shopping cart.<br>1 more product is added to the cart. |
| Click to Proceed to checkout | Checkout page displayed<br><br>Quantity = 14 |
| Click on trash icon to delete product | Cart is empty |
