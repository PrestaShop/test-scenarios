---
title: "ps_emailsubscription - Check that the verification email is send"
weight: 4
---

# ps_emailsubscription - Check that the verification email is send
## Details
* **Component** : ps_emailsubscription
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-649

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Search ps_emailsubscription > Configure | Configure page of ps_emailsubscription module is displayed |
| Enable option _Would you like to send a verification email after subscription?_ > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | Alert _A verification email has been sent. Please check your inbox._ is displayed<br><br>An email is sent to test@prestashop.com with title "Email verification" |
| Go back to BO > ps_emailsubscription Configure page > Disable the first option _Would you like to send a verification email after subscription?_ > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | Alert _A verification email has been sent. Please check your inbox._ is displayed<br><br>No verification email is sent. |
