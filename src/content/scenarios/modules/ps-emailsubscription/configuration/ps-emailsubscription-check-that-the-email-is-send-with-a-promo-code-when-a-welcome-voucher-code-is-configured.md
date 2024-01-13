---
title: "ps_emailsubscription - Check that the email is send with a promo code when a Welcome voucher code is configured"
weight: 3
---

# ps_emailsubscription - Check that the email is send with a promo code when a Welcome voucher code is configured
## Details
* **Component** : ps_emailsubscription
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-648
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_emailsubscription/02_configuration/03_checkWelcomeVoucher.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Module > Search ps_emailsubscription > Configure > Add a _Welcome voucher code_ > Save | Settings updated message is displayed |
| Go to FO > Add your email in the subscription box > Click Subscribe | Alert You have successfully subscribed to this newsletter. is displayed<br><br>An email sent to lorem@ipsum.com is titled Newsletter voucher with the Welcome voucher code : HELLO |
