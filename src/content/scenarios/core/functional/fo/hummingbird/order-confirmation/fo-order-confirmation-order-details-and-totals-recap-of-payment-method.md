---
title: "FO - Order confirmation - Order details and totals - Recap of payment method"
weight: 3
---

# FO - Order confirmation - Order details and totals - Recap of payment method
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7009
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/12_orderConfirmation/03_recapPaymentMethod.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| With pre-condition Order your product and choose "Pay by check" payment method | Order confirmation page is displayed |
| Scroll to Payment information block | See the following :<br><br>Pay by Check<br><br>You have chosen payment by check.<br>Your check must include following details:<br><br>Payment amount:<br>€XX.XX<br>Payable to the order of:<br>___________<br>Mail to:<br>___________<br>Do not forget to insert your order reference XXXXXXX.<br>An email has been sent to you with this information.<br>Your order will be sent as soon as we receive your payment. |
| Scroll down to Order details | See "Payment method: Payments by check" |
| With pre-condition > Make another Order and choose "Pay by bank wire" Payment method | Order confirmation page is displayed |
| Scroll to Payment information block | See the following :<br><br>Pay by Bank Wire<br><br>You have chosen payment by bank transfer.<br>Please send us a bank transfer with following details:<br><br>Amount<br>€XX.XX<br>Name of account owner<br>___________<br>Please include these details<br>___________<br>Bank name<br>___________<br>Please specify your order reference XXXXXXX in the bankwire description.<br>We've also sent you this information by e-mail.<br>Your order will be sent as soon as we receive payment. |
| Scroll down to Order details | See "Payment method: Bank transfer" |
| With pre-condition > Make another Order and choose " Pay by Cash on Delivery" Payment method | Order confirmation page is displayed |
| Scroll to Payment information block | The payment block is not displayed, there's just a phrase "You have chosen the cash on delivery method." |
| Scroll down to Order details | See "Payment method: Cash on delivery (COD)" |
