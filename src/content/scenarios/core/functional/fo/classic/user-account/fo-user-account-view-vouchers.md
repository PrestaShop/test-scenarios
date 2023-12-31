---
title: "FO - User account - View vouchers"
weight: 3
---

# FO - User account - View vouchers
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1201
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/03_viewVouchers.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" button | Cart Rules form page is displayed |
| Fill the form on the 3 tabs > Click on "Save" button | * Success message "Successful creation." is displayed<br> * New cart rule is created |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your logins and click on "Sign in" button | Home page is displayed |
| Click on your username link in the header > Click on "Your vouchers" tab | Your vouchers table is displayed with the newly created voucher |
| Go back to BO > Add multiple cart rules with different values | * Message "Successful creation." is displayed<br> * New cart rules are created |
| Go back to FO > Go to your customer account > Click on "Your vouchers" tab | Your vouchers table is displayed with the a list of new created vouchers |
