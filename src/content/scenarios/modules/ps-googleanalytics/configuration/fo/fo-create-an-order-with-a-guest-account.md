---
title: "FO - Create an order with a guest account "
weight: 2
---

# FO - Create an order with a guest account 
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-3189

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Open the FO and add the first product to the cart | Home page is displayed and the product is added to the cart |
| Click on "Proceed to checkout" | The shopping cart is displayed and the first product is added to the cart |
| Click on "Proceed to checkout" | The checkout page is displayed |
| In the Personal information step, set these fields: # _Social title_ # _First name_<br> # _Last name_<br> # and _Email_.<br> # Select those checkboxes: _Customer data privacy_ and _I agree to the terms and conditions and the privacy policy_. Click on Continue | A guest is well created, the Addresses Step is displayed and The "First name" & "Last name" & "Country" are not empty |
| In the Addresses Step, set these fields:<br> # Address<br> # Zip/Postal Code<br> # City and click on continue | The address is well created and the Shipping step is displayed |
| Select a carrier and click on "Continue" | The payment step is displayed |
| Select a payment method, select on "I agree to the terms of service and will adhere to them unconditionally." and click on "Place Order" | The order confirmation is displayed |
| Check the database & the table Prefix_ganalytics | A new line is added for the new order |
