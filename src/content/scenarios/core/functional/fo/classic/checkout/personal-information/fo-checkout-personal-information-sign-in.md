---
title: "FO - Checkout - Personal Information - Sign in"
weight: 2
---

# FO - Checkout - Personal Information - Sign in
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product | The product is displayed |
| Click on ADD TO CART | The pop-up of PROCEED TO CHECKOUT is well displayed |
| Click on PROCEED TO CHECKOUT | The SHOPPING CART is well displayed |
| Click on PROCEED TO CHECKOUT | The PERSONAL INFORMATION is well displayed. |
| Fill the *Sign in* form and click on CONTINUE | The step 2 :ADDRESSES page is displayed |
| Click EDIT step 1 and CONTINUE | the page show <br> * Connected as [John DOE|http://127.0.0.1:8081/develop/en/identity]..<br> * Not you? [Log out|http://127.0.0.1:8081/develop/en/?mylogout=]<br><br>_If you sign out now, your cart will be emptied._ |
| Click on logout | The page show <br>_There are no more items in your cart_ |
