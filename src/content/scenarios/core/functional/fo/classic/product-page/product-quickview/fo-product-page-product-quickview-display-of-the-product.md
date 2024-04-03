---
title: "FO - Product Page - Product Quickview - Display of the product"
weight: 4
---

# FO - Product Page - Product Quickview - Display of the product
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1251
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/01_quickView/04_displayOfTheProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal with : <br> * On the left : an enlarged image of the one selected on its right<br> * On the right, in this order, from top to bottom : the title, the price , the type of tax, the description, the combination, the Quantity with the number on a case with an up arrow and a down arrow on it right. the "Add to cart" button  on the right of the arrow. <br> * On the bot : The share buttons and the word "Share" on the left. When you have no quantity of the product, the button "Notify me when available" on the right |
