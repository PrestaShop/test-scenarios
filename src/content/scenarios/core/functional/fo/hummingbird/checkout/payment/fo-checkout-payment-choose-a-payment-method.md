---
title: "FO - Checkout - Payment - Choose a payment method"
weight: 1
---

# FO - Checkout - Payment - Choose a payment method
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7026

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On FO > Click quick view of a product | Quickview is well displayed |
| Click to Add to cart | "Product successfully added to your shopping cart" modal |
| Click to proceed to checkout | Shopping cart displayed<br><br>Shopping cart contain the product |
| Click to proceed to checkout | Personal information is displayed<br><br>You have your cart on the right |
| Click on Sign in > Click on Continue to shipping | Addresses step displayed |
| Click on Continue to shipping | Shipping Method step is displayed |
| Click on Continue to payment | Payment step is displayed |
| Click on Pay by check | See the following <br>Please send us your check including the following details:<br><br>Amount€14.28 (tax incl.)<br><br>Payee___________<br><br>Send your check to this address___________ |
| Click on Pay by Cash on Delivery | See the following<br>You pay for the merchandise upon delivery |
| Click on Pay by bank wire > Check I agree to the terms of service and will adhere to them unconditionally. > Click on Place order | Your order is confirmed<br><br>Payment information<br><br>Pay by Bank Wire<br><br>You have chosen payment by bank transfer.<br>Please send us a bank transfer with following details: |
