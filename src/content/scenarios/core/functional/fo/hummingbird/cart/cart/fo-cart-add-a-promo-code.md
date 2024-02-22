---
title: "FO - Cart - Add a promo code"
weight: 3
---

# FO - Cart - Add a promo code
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-6995

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on Add new cart rule | Cart rule page is displayed |
| Set up cart rule > Save | Successful creation alert is displayed |
| Go to FO > Add to cart "Hummingbird Printed T-shirt" > Click on Proceed to checkout | Shopping cart is displayed |
| Click on "Promo code" > Write "reduc" on the new field > Click on "Apply" button | Discount is taken into account (-20,00€) |
| Click on "Promo code" > Write "reduc" on the new field > Click on "Apply" button | Alert message with "This voucher is already in your cart" is displayed |
| Click on "Promo code" > Write "reduction" on the new field > Click on "Apply" button | Alert message with "This voucher does not exist." is displayed |
| Erase what you writte in the field for promo code > Click on "Apply" button | Alert message with "You must enter a voucher code." is displayed |
| Delete discount by clicking on the trash icon | Discount is deleted |
| Delete promo code in BO | Alert message Successful deletion is displayed |
