---
title: "FO - Product page - Product page : Add to cart"
weight: 1
---

# FO - Product page - Product page : Add to cart
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1256
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/02_productPage/01_addToCart.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> click on  an existing product image | The page of the product is well displayed |
| Click on quantity and set it to 5 | The quantity value is updated |
| On page of the product> Click on "Add to cart" | The modal is well displayed.<br><br>You will see :<br> * "Product successfully added to your shopping cart" message<br> * Recap of your cart (number of item, subtotal, shipping, Total(tax incl.) |
| Click on _*Continue Shopping*_ button | The modal is gone and all product page is dispalyed |
| Go to All products > choose  an other product and click on _*Quick view*_ button | The pop-up of the product is well displayed |
| Put a quantity and Add to cart | The modal is well dispalyed when adding a product to cart and a successful message "_*Product successfully added to your shopping cart*_" is displayed with the quantity chosen. |
| Click on _*PROCEED TO CHECKOUT*_ button | The _*SHOPPING CART*_ page is well displayed |
| Edit the quantity of product in the cart | The product's quantity and price are updated. |
| Click on product trash icon | The product is deleted from the cart. |
