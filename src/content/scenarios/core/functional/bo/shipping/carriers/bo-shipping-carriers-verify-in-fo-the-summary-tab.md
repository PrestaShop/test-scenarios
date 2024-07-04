---
title: "BO - Shipping - Carriers - Verify in FO the Summary tab"
weight: 9
---

# BO - Shipping - Carriers - Verify in FO the Summary tab
## Details
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8913

## Steps
| Step Description | Expected result |
| ----- | ----- |
| FO > Click on "The best is yet to come" product | "The best is yet to come" product page displayed |
| Click to Add to cart | h4. Product successfully added to your shopping cart |
| Click to Proceed to checkout | Shopping cart page displayed |
| Click to Proceed to checkout | Adresses tab displayed |
| Click to Continue | Shipping method tab displayed<br> * Click and collect<br> * My carrier<br><br> <br><br>Subtotal = €34.80<br><br>Shipping = Free<br><br>Total (tax incl.) = €34.80 |
| Click to My carrier | Subtotal = €34.80<br><br>Shipping = €8.40<br><br>Total (tax incl.) = €43.20 |
| Click to My store | Products page displayed |
| Click on Cart (1) | Shopping cart page diplayed |
| click on Trash icon | There are no more items in your cart |
