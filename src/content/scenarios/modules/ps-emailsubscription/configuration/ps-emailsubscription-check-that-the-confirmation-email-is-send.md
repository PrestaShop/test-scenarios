---
title: "ps_emailsubscription - Check that the confirmation email is send"
weight: 5
---

# ps_emailsubscription - Check that the confirmation email is send
## Details
* **Component** : ps_emailsubscription
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-650

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Search ps_emailsubscription > Configure | Configure page of ps_emailsubscription module is displayed |
| Enable option Would you like to send a confirmation email after subscription? > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | Alert _You have successfully subscribed to this newsletter._ is displayed<br><br>An email is sent to bonjour@prestashop.com with title "Newsletter confirmation" |
| Go back to BO > ps_emailsubscription Configure page > Disable the second option _Would you like to send a confirmation email after subscription?_ > Save | Message Settings updated is displayed |
| Click View my store > Scroll down to Get our latest news and special sales > Add your email address > Click Subscribe | An alert _You have successfully subscribed to this newsletter._ is displayed<br><br>No confirmation email is sent |
