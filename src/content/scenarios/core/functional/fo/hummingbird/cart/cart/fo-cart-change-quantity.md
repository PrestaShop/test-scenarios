---
title: "FO - Cart : Change quantity"
weight: 1
---

# FO - Cart : Change quantity
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6993
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/10_cart/02_cart/01_changeQuantity.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on button "Add to cart" for product "Hummingbird Printed T-shirt" > Click on Proceed to checkout | The shopping cart is displayed |
| Click on the "+" next to the product's quantity | Quantity is 2 |
| Click on the "-" next to the product's quantity | Quantity is 1 |
| Click on the product's quantity > Write 3 > Click on the checkmark | Quantity is 3 |
| Click on the product's quantity > Write -6 > Click on the checkmark | There are no more items in your cart |
| Go to FO > Click on button "Add to cart" for product "Hummingbird Printed T-shirt" > Click on Proceed to checkout | The shopping cart is displayed |
| Click on the product's quantity > Write +6 > Click on the checkmark | Quantity is 6 |
| Click on the product's quantity > Write 64 > Click on the cross | Quantity is 6 |
| Click on the product's quantity > Write "azerty" > Click on the checkmark | Quantity is 6 |
| Click on the product's quantity > Write 2400 > Click on the checkmark | Quantity is 300<br>Alert message "You can only buy 300 "Hummingbird printed t-shirt". Please adjust the quantity in your cart to continue." |
| Close the alert message | Alert message is not displayed anymore |
| Click on the product's quantity > Write 3 > Click outside the input field | Quantity is still 300 |
| Click on the product's quantity > Write 0 > Click on the checkmark | There are no more items in your cart |
