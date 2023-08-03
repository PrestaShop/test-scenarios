---
title: "FO - Checkout - Shipping method - Select a carrier"
weight: 2
---

# FO - Checkout - Shipping method - Select a carrier
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1308

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Log into your customer account | You are now logged in |
| Click on a product > Add to cart > Proceed to checkout > Proceed to checkout | Step 2 of checkout process is displayed : Addresses |
| Choose My address (Address in the US) > Continue | Step 3 - Shipping method is displayed.<br><br>Only My _carrier_ is displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping |
| Click on Continue | Step 4 is displayed with alert : Unfortunately, there is no payment method available.<br><br>You can't proceed to checkout |
| Click the Edit button on Step 2 - Addresses > Choose "Mon adresse" is checked (address in France) > Continue | Step 3 - Shipping method is displayed.<br><br>_Click and collect_ and _My carrier_ are displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping |
| Choose Click and collect > Continue | Step 4 - Payment is displayed |
| Choose Payment by bank wire > Agree to the terms and conditions > Place order | YOUR ORDER IS CONFIRMED |
