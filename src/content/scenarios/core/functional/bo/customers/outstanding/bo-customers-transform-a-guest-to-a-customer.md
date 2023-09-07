---
title: "BO - Customers - Transform a Guest to a Customer"
weight: 6
---

# BO - Customers - Transform a Guest to a Customer
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-7392

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product | The product is displayed |
| Click on ADD TO CART | The pop-up of PROCEED TO CHECKOUT is well displayed |
| Click on PROCEED TO CHECKOUT | The SHOPPING CART is well displayed |
| Click on PROCEED TO CHECKOUT | The PERSONAL INFORMATION is well displayed. |
| Fill the *Order as a guest* form without filling in the password and the birthdate<br><br>check :<br><br>_ Receive offers from our partners_<br>_ I agree to the terms and conditions and the privacy policy_<br>_Sign up for our newsletter_<br>_Customer data privacy_<br><br>and click on CONTINUE | The step 2 ADDRESSES page is displayed |
| Click Edit Step 1(PERSONAL INFORMATION) > Edit Firstname and Lastname and<br><br>check :<br><br>_ Receive offers from our partners_<br>_ I agree to the terms and conditions and the privacy policy_<br>_Sign up for our newsletter_<br>_Customer data privacy_<br><br> <br><br>CONTINUE | Step 2 is displayed |
| Fill the *ADDRESSES* form<br><br>and click on CONTINUE | The step 3 SHIPPING METHOD is well displayed. |
| Step 3 - *Shipping method* is displayed.<br><br>_Click and collect_ and _My carrier_ are displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping<br><br>And click on continue | Step 4 - Payment is displayed |
| Choose Payment by bank wire > Agree to the terms and conditions > Click on PLACE ORDER button | YOUR ORDER IS CONFIRMED |
| Go to BO > Customers page | Guest account exists in customers table and assigned to "Guest" Group |
| Go to BO > Orders > Orders | Orders page is displayed |
