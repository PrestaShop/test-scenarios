---
title: "FO - Cart - Modal - Display of modal when adding a product to cart"
weight: 1
---

# FO - Cart - Modal - Display of modal when adding a product to cart
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-6987
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/10_cart/01_modal/01_displayModal.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on Quick view for the product The adventure begins Framed poster | The quick view modal is well displayed |
| Edit Quantity to 2 > Click on Add to cart button | The modal Product successfully added to your shopping cart is well displayed with the Quantity (2) and Dimension (40x60cm) chosen. |
| Click on the button Continue Shopping | The modal is gone and the FO is displayed |
| Search for "cushion" in search bar > Click on Hummingbird cushion product | The product page is well displayed |
| Edit the quantity to 5 > Click on the button Add to cart | The modal Product successfully added to your shopping cart is well displayed with the Quantity (5) and Color (White) chosen. |
| Click on Remove for both products | Your shopping cart is empty.<br>The message "There are no more items in your cart" is displayed |
