---
title: "ps_emailsubscription - Check that the confirmation email is send"
weight: 5
---

# ps_emailsubscription - Check that the confirmation email is send
## Details
* **Component** : ps_emailsubscription
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-650
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_emailsubscription/02_configuration/02_checkConfirmatonEmail.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Search ps_emailsubscription > Configure | Configure page of ps_emailsubscription module is displayed |
| Enable option _Would you like to send a confirmation email after subscription?_ > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | Alert _You have successfully subscribed to this newsletter._ is displayed<br><br>An email is sent to bonjour@prestashop.com with title "Newsletter confirmation" |
| Go back to BO > ps_emailsubscription Configure page > Enable _Would you like to send a verification email after subscription?_ > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | Alert _A verification email has been sent. Please check your inbox._ is displayed<br><br>An email is sent to titi@toto.com with title "Email Verification" |
| Click on the link provided in the email | Message Thank you for subscribing to our newsletter. is displayed in the FO<br><br>An email is sent to titi@toto.com with title "Newsletter Confirmation" |
| Go back to BO > ps_emailsubscription Configure page > Disable all the options _Would you like to send a verification email after subscription?_ & _Would you like to send a confirmation email after subscription?_ >Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | An alert _You have successfully subscribed to this newsletter._ is displayed<br><br>No confirmation email and no verification emails are sent |
