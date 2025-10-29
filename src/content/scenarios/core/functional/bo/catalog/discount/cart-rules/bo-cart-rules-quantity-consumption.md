---
title: "BO - Cart Rules - Quantity consumption"
weight: 4
---

# BO - Cart Rules - Quantity consumption
## Details
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10666

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The Cart rules page is well displayed |
| Click on "Add new cart rule" page | The "Add new cart rule" page is well displayed |
| Set these fields and click on Save | An alert "Successful creation." is displayed<br><br> <br><br>Amount discount quantity = 100 |
| Go to FO | FO page displayed |
| Sign in | Logged as John DOE |
| Add "The best is yet to come framed poster" to cart | h4. Product successfully added to your shopping cart |
| Click to Proceed to checkout | Shopping cart page displayed.<br><br> Total = 34,80€ |
| Click to "Have a promo code"<br><br> <br><br>Add | Total = 29,80€ |
| Proceed to Checkout and place order | h3. Your order is confirmed<br><br> Total = 29,80€ |
| Go to BO > Catalog > Discount > Cart Rules | The Cart rules page is well displayed<br><br> <br><br>Amount discount quantity = 99 |
| Delete the discount that were created | Successful deletion |
