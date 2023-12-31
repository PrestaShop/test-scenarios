---
title: "FO - Create an Order by existing customer"
weight: 3
---

# FO - Create an Order by existing customer
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-3190

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add product to the cart & Click on "Proceed to checkout" | The "Shopping cart" page is displayed" |
| Click on "Proceed to checkout | The checkout page is displayed |
| In the Personal information step, click on "Sign in" | The Email & password fields are displayed |
| Set Email & Password and click on Continue | The Address step is displayed |
| Click on the "Continue" button | The "Shipping" step is displayed |
| Click on the "Continue" button | The "Payment methods" step is displayed |
| Select a payment method, click on "I agree to the terms of service and will adhere to them unconditionally." then click on "Place Order" | The Order confirmation page is displayed |
| Check the database & the table Prefix_ganalytics | A new line is added for the new order |
