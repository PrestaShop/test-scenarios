---
title: "FO - Homepage - Select color on product list"
weight: 5
---

# FO - Homepage - Select color on product list
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-6966
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/06_homePage/05_selectColor.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Scroll down to Popular Products block | See the list of popular products displayed |
| For the product "Hummingbird printed t-shirt" > Click on the color combination "white" | The product page for Hummingbird printed t-shirt is displayed<br>Size : S<br>Color : White<br><br>https://github.com/PrestaShop/PrestaShop/issues/35481 |
| Click on my_store logo > Scroll down to Popular Products block > For the product "Hummingbird printed t-shirt" > Click on the color combination "black" | The product page for Hummingbird printed t-shirt is displayed<br>Size : S<br>Color : Black |
