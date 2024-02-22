---
title: "FO - Checkout - Personal Information - Create an account"
weight: 3
---

# FO - Checkout - Personal Information - Create an account
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7017
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/01_personalInformation/03_createAccount.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click the Cart button on a product | The modal Product successfully added to your shopping cart is displayed |
| Click on Proceed to checkout | The Shopping cart is well displayed |
| Click on Proceed to checkout | The Personal information tab is well displayed |
| Fill the *Order as a guest* form with filling in the password and the birthdate ><br><br>check :<br><br>- Receive offers from our partners<br>- I agree to the terms and conditions and the privacy policy<br>- Sign up for our newsletter<br>- Customer data privacy<br><br>> Click on Continue<br><br><br>Issue on wording : https://github.com/PrestaShop/PrestaShop/issues/35297 | The Step 2 Addresses page is displayed |
| Click Back to Personal Information | The page shows<br><br> * Connected as Prestashop Demo<br> * Not you? Sign out<br><br>If you sign out now, your cart will be emptied. |
| Click on Sign out | The page shows<br>There are no more items in your cart |
