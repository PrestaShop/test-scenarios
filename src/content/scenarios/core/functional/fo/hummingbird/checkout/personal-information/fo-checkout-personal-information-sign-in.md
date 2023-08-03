---
title: "FO - Checkout - Personal Information - Sign in"
weight: 2
---

# FO - Checkout - Personal Information - Sign in
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7014

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product > Add to cart > Proceed to checkout > Proceed to checkout | Step 1 of checkout process is displayed : Personal Information |
| Click on Sign in > Enter email + password > Click on Continue | Error message Authentication failed. is displayed |
| Enter a correct combination of email + password > Click on Continue | Step 2 - Addresses is displayed |
| Click on Edit button of Step 1 > Continue | The page shows Step 1 :<br> * Connected as [John DOE|http://127.0.0.1:8081/develop/en/identity].<br> * Not you? [Log out|http://127.0.0.1:8081/develop/en/?mylogout=]<br><br>_If you sign out now, your cart will be emptied._ |
| Click on Log out | You are now logged out.<br><br>The cart is displayed :<br> _There are no more items in your cart_ |
