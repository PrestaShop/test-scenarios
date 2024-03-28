---
title: "FO - Product Page - Change quantity"
weight: 2
---

# FO - Product Page - Change quantity
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6970

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On FO > Click on The best is yet to come' Framed poster product | The best is yet to come' Framed poster product page diplayed<br><br>Quantity = 1 |
| Click on the down arrow quantity | Quantity doesn't change. Quantity = 1 |
| Click on the top arrow quantity | Quantity = 2 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Add to cart button is greyed out |
| The page needs to be refreshed before next step because of this issue : https://github.com/PrestaShop/hummingbird/issues/615 |  |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>There are 12 products in the cart |
| Click on Remove | There are no more items in your cart |
