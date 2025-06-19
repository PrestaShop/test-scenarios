---
title: "FO - Home page - Select color on hover on product list"
weight: 5
---

# FO - Home page - Select color on hover on product list
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1254
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/06_homePage/05_selectColor.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "Hummingbird printed t-shirt" | The button "Quickview" should be displayed with colored boxes |
| * Put you mouse over the white color<br> * Put your mouse over the black color<br> * Clic on the black color | * The border of the white box is bolded <br> * The border of the black box is bolded <br> * the "Hummingbird Printed t-shirt" should be displayed with the combination : Size : S and Color : Black |
