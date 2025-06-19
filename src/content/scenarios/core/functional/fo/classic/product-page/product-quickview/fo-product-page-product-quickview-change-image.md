---
title: "FO - Product Page - Product Quickview - Change image"
weight: 7
---

# FO - Product Page - Product Quickview - Change image
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1255
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/01_quickView/07_changeImage.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product that you've created | The button "Quickview" should be displayed with colored boxes |
| Clic on the "Quickview" button | You should have a modal that show you the product with an enlarged image of the one selected on its right |
| Select the an other image on the right of the enlarged one | The image enlarged should change with the image you clicked. The image you clicked should have new blue border |
