---
title: "FO - Cart : Display modal of product customization"
weight: 4
---

# FO - Cart : Display modal of product customization
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1283
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/10_cart/02_cart/04_displayModalProductCustomization.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/front-office/customers-shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| FO > In input Search, type : Customizable > Press Enter | Search results page displayed<br><br>There is 1 product. : Customizable Mug |
| Click on Customizable Mug | Customizable Mug product page displayed |
| Fill Customization input text > Click on "Save customization" | Your customization: test customization<br><br> <br><br>Add to cart button is enabled |
| Click on Add to cart | Product successfully added to your shopping cart |
| Click on Proceed to checkout | Shopping cart displayed<br><br>1 Item in the shopping cart |
| Click on "Product customization" | Modal displayed<br><br>Title : Product customization<br><br>Type your text here : test customization |
| Click on the cross to close the modal | Modal is closed<br><br>Shopping cart is displayed |
| Click on Remove button | There are no more items in your cart |
