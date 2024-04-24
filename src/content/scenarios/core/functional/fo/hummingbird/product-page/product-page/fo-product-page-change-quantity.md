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
| On FO > Click on The best is yet to come' Framed poster product | The best is yet to come' Framed poster product page diplayed<br><br>Quantity = 1 |
| Click on the down arrow quantity | Quantity doesn't change. Quantity = 1 |
| Click on the top arrow quantity > Add to cart | Quantity = 2 |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Add to cart button is greyed out |
| The page needs to be refreshed before next step because of this issue : https://github.com/PrestaShop/hummingbird/issues/615 |  |
| Change the quantity by input > Click Add to cart | Product successfully added to your shopping cart<br><br>There are 14 products in the cart |
| Click on Continue shopping | Modal is closed |
| Change the quantity by input > Click Add to cart | Add to cart button is greyed out |
| Refresh the page | Cart button is now clickable |
| Change the quantity by input > Click Add to cart | Null quantity. |
| Go to cart > Click on Remove | There are no more items in your cart |
