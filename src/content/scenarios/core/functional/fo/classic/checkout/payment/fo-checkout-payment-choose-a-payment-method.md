---
title: "FO - Checkout - Payment - Choose a payment method"
weight: 1
---

# FO - Checkout - Payment - Choose a payment method
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1312
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/11_checkout/04_payment/01_choosePaymentMethod.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On FO > Product page<br><br>click to quick view of a product | quickview displayed |
| Click to Add to cart | "Product successfully added to your shopping cart" notificaiton |
| Click to proceed to checkout | SHOPPING CART displayed<br><br>Shopping cart contain the product |
| Click to proceed to checkout | Personal information is displayed<br><br>You've the your cart on the right |
| Click on Sign in, fill the input and click to continue | Adressess page displayed |
| Click to continue | SHIPPING METHOD displayed |
| Click to continue | PAYMENT displayed |
| Click on Pay by bank wire | Please transfer the invoice amount to our bank account. You will receive our order confirmation by email containing bank details and order number. |
| Check I agree to the [terms of service|http://localhost/ps8101/en/content/3-terms-and-conditions-of-use] and will adhere to them unconditionally. | PLACE ORDER button enable |
| Click on Place order | Order confirmation page displayed<br><br>Payment method : Bank transfer |
| Clic on the "my store" logo > Product page<br><br>click to quick view of a product | quickview displayed |
| Click to Add to cart | "Product successfully added to your shopping cart" notificaiton |
| Click to proceed to checkout | Shopping cart displayed<br><br>Shopping cart contain the product |
| Click to proceed to checkout | Adresses is displayed<br><br>You've the your cart on the right |
| Click to continue | SHIPPING METHOD displayed |
| Click to continue | PAYMENT displayed |
| Click on Pay by Check | Please send us your check including the following details:<br><br>Amount€14.28 (tax incl.)<br><br>Payee___________<br><br>Send your check to this address___________ |
| Check I agree to the [terms of service|http://localhost/ps8101/en/content/3-terms-and-conditions-of-use] and will adhere to them unconditionally. | PLACE ORDER button enable |
| Click on Place order | Order confirmation page displayed<br><br>Payment method : Payements by check |
| Clic on the "my store" logo > Product page<br><br>click to quick view of a product | quickview displayed |
| Click to Add to cart | "Product successfully added to your shopping cart" notificaiton |
| Click to proceed to checkout | Shopping cart displayed<br><br>Shopping cart contain the product |
| Click to proceed to checkout | Adresses is displayed<br><br>You've the your cart on the right |
| Click to continue | SHIPPING METHOD displayed |
| Click to continue | PAYMENT displayed |
| Click on Pay by Cash on Delivery | You pay for the merchandise upon delivery |
| Check I agree to the [terms of service|http://localhost/ps8101/en/content/3-terms-and-conditions-of-use] and will adhere to them unconditionally. | PLACE ORDER button enable |
| Click on Place order | Order confirmation page displayed<br><br>Payment method : Cash on delivery (COD) |