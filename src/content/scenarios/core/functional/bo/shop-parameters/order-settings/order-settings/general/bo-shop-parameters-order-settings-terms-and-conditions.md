---
title: "BO - Shop Parameters - Order Settings - Terms and conditions"
weight: 8
---

# BO - Shop Parameters - Order Settings - Terms and conditions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9788
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/01_orderSettings/general/08_termsAndConditions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO Orders Settings > General | Page for terms and conditions : Terms and conditions of use |
| On FO sign in | You're logged |
| Add product to cart > Proceed to checkout and go to step 4 | Payment method displayed and checkbox with "I agree to the [terms of service|http://localhost/develop/en/content/2-legal-notice] and will adhere to them unconditionally." |
| Click on "Terms of service" hyperlink | h1. Terms and conditions of use displayed on a modal |
| On BO, edit Page for terms and conditions and save | Update successful |
| refresh the BO and click on Terms of service hyperlink | h2. Legal displayed on a modal |
