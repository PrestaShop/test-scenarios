---
title: "BO - Customer Service - Respond to message"
weight: 3
---

# BO - Customer Service - Respond to message
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-865

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO > Go to Contact us Page > Fill Fields > Click Send | Message "Your message has been successfully sent to our team." appears |
| Go to BO > Customer Service > Customer Service > In Customer Service Block > Click View on latest thread | Thread is displayed |
| Scroll to block "Your answer to XXX" > Add a response > Click Send | The Thread is updated with your message<br><br>Message "The message was successfully sent to the customer." is displayed<br><br>Orders and messages timeline Block is updated with your message<br><br>Thread status is "Closed" |
