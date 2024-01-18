---
title: "FO - Checkout - Personal Information - Create an account"
weight: 3
---

# FO - Checkout - Personal Information - Create an account
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1300

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product | The product is displayed |
| Click on ADD TO CART | The pop-up of PROCEED TO CHECKOUT is well displayed |
| Click on PROCEED TO CHECKOUT | The SHOPPING CART is well displayed |
| Click on PROCEED TO CHECKOUT | The PERSONAL INFORMATION is well displayed. |
| Fill the *Order as a guest* form with filling in the password and the birthdate<br><br>check :<br><br>_ Receive offers from our partners_<br>_ I agree to the terms and conditions and the privacy policy_<br>_Sign up for our newsletter_<br>_Customer data privacy_<br><br>and click on CONTINUE | * The step 2 :ADDRESSES page is displayed<br> * An email "Welcome!" should be received |
| Click EDIT step 1 and CONTINUE | the page show <br> * Connected as [Prestashop Demo|http://127.0.0.1:8081/develop/en/identity]..<br> * Not you? [Log out|http://127.0.0.1:8081/develop/en/?mylogout=]<br><br>_If you sign out now, your cart will be emptied._ |
| Click on logout | The page show <br>_There are no more items in your cart_ |
