---
title: "FO - Checkout - Personal information : Order as a guest"
weight: 1
---

# FO - Checkout - Personal information : Order as a guest
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7013
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/01_personalInformation/01_orderAsAGuest.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add a product to the cart | The modal Product successfully added to your shopping cart is displayed |
| Click on Proceed to checkout | The Shopping cart is well displayed |
| Click on Proceed to checkout | The Personal Information step is well displayed. |
| Fill the *Order as guest* form without filling in the password and the birthdate > <br><br>Check :<br><br>- Receive offers from our partners<br>- I agree to the terms and conditions and the privacy policy<br>- Sign up for our newsletter<br>- Customer data privacy<br><br>> Click on Continue<br><br>Issue on wording : https://github.com/PrestaShop/PrestaShop/issues/35297 | The Step Addresses page is displayed |
| Click Back to Personal Information > Edit Firstname and Lastname ><br><br>Check :<br><br>- Receive offers from our partners<br>- I agree to the terms and conditions and the privacy policy<br>- Sign up for our newsletter<br>- Customer data privacy<br><br>> Click on Continue | Step 2 Addresses is displayed |
| Fill the Addresses form > Click on Continue to shipping | The step 3 Shipping method is well displayed. |
| In Step 3 Shipping method > Click and collect and My carrier are displayed with :<br> * a logo<br> * a name<br> * a delay<br> * the price of shipping<br><br>> Click on Continue to payment | Step 4 - Payment is displayed |
| Choose Pay by bank wire > Check I agree to the terms of service and will adhere to them unconditionally. > Place order | Your order is confirmed |
| Go to BO > Customers > Customers page | See that the latest Customer created is a Guest |
