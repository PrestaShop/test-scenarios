---
title: "FO - Checkout - Personal Information - Order as a guest"
weight: 1
---

# FO - Checkout - Personal Information - Order as a guest
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7013

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add a product to the cart | The modal Product successfully added to your shopping cart is displayed |
| Click on Proceed to checkout | The Shopping cart is well displayed |
| Click on Proceed to checkout | The Personal Information step is well displayed. |
| Fill the *New Customer* form without filling in the password and the birthdate > <br><br>Check :<br><br>- Receive offers from our partners<br>- I agree to the terms and conditions and the privacy policy<br>- Sign up for our newsletter<br>- Customer data privacy<br><br>> Click on Continue | The Step Addresses page is displayed |
| Click Back to Personal Information > Edit Firstname and Lastname ><br><br>Check :<br><br>- Receive offers from our partners<br>- I agree to the terms and conditions and the privacy policy<br>- Sign up for our newsletter<br>- Customer data privacy<br><br>> Click on Continue | Step 2 Addresses is displayed |
| Fill the *ADDRESSES* form<br><br>and click on CONTINUE | The step 3 SHIPPING METHOD is well displayed. |
| Step 3 - *Shipping method* is displayed.<br><br>_Click and collect_ and _My carrier_ are displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping<br><br>And click on continue | Step 4 - Payment is displayed |
| Choose Payment by bank wire > Agree to the terms and conditions > Place order | YOUR ORDER IS CONFIRMED |
| Go to BO > Customers page | Guest account is not existing in customers table |
