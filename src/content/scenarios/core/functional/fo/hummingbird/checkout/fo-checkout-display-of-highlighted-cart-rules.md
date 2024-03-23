---
title: "FO - Checkout - Display of highlighted cart rules"
weight: 4
---

# FO - Checkout - Display of highlighted cart rules
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-5113

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Add a new cart rule > Fill the form with Data > Save | "Successful creation" alert is displayed |
| Go to FO > Add "The best is yet to come' Framed poster" to the cart > Click on "Proceed to checkout" | The shopping cart page displayed |
| Click on the "Promo code" section | See the Promo code input : Paste your voucher here<br>Button Apply is displayed<br> <br><br>Take advantage of our exclusive offers:<br>1234 - KDO |
| Click on "1234" > Click on Apply | Discount(s) : - €5.00<br><br>Discount "KDO" displayed<br>Trash icon is displayed<br><br><br>Total (tax incl.) = €29.80 |
| Click on Trash icon | Discount is deleted<br><br>Total (tax incl.) = €34.80<br><br><br>Following section is displayed :<br>Take advantage of our exclusive offers:<br>1234 - KDO |
