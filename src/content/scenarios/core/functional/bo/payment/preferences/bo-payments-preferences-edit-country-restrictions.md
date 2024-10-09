---
title: "BO - Payments - Preferences - Edit Country restrictions"
weight: 3
---

# BO - Payments - Preferences - Edit Country restrictions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9786
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/10_payment/02_preferences/03_countryRestrictions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Payment > Preferences > Block Country restrictions | Country restrictions block is displayed<br><br>See France is available and checked for all payment<br><br>See United States is available and unchecked for all payment |
| Go to FO > Sign in | You're logged |
| Add product to cart > Proceed to checkout | Addresses displayed |
| Choose France Adresse and go to step 3 | Shipping method displayed |
| Choose My carrier and go to step 4 | Payment method displayed<br><br>Pay by Check displayed<br><br>Pay by Cash on Delivery displayed<br><br>Pay by bank wire displayed |
| Go to BO > Payment > Preferences > Block Country restrictions | Country restrictions block is displayed<br><br>See France and United States is available and not checked |
| Uncheck Bank transfer and Cash on delivery for France and save | Successful update |
| Refresh the FO | Only Pay by Check displayed |
| On Step 2, change addresse for United States and go to step 4 | Unfortunately, there is no payment method available. |
