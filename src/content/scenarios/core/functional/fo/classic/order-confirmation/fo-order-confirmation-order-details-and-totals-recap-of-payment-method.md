---
title: "FO - Order confirmation - Order details and totals - Recap of payment method"
weight: 3
---

# FO - Order confirmation - Order details and totals - Recap of payment method
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1316
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/12_orderConfirmation/03_recapPaymentMethod.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Click on SIgn in <br> * Set up your Email and Password <br> * Click on "continue" | You should be redirect to Adresses tab |
| Clic on "Continue" | You should be redirect to "Shipping method" tab |
| Clic on "Continue" | You should be redirect to "Payment" tab |
| * Clic on "Pay by Check" <br> * Clic on the checkbox"I agree to the terms of service [...]" | * The detail about the adress and the payee should be displayed<br> * The box should be checked and the button "Place Order" should be enabled |
| Clic on "Place Order" | You should have a new page displayed named "Order confirmation" with : <br> * "Subtotal" where is the sum of products' prices <br> * "Shipping and handling" where is the price of the shipping <br> * "TOTAL (TAX INCL.)" where is the sum of the previous line. <br><br><br> * The "ORDER DETAILS:" part with <br> ** "Order reference:" with the order reference <br> ** "Payment method:" where it show the payment method used, here is "Payments by check"<br> ** "Shipping method:" where it show the shipping method used, here is " Click and collect, _Pick up in-store_ " |
