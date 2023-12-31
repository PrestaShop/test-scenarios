---
title: "FO - Contact us - Send message while logged out"
weight: 4
---

# FO - Contact us - Send message while logged out
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1224
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/05_contactUs/03_sendMessageAsAnonymous.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to module manager > Contact form module > configuration page and Enable Receive customers\' messages by email | Check success message |
| Enable Send confirmation email to your customers | Check success message |
| Go to FO > In footer, click on Our Company > Contact us | Contact form is displayed |
| Fill the form > Send | Message "Invalid email address." is displayed |
| Fill the form > Send | Message "Invalid email address." is displayed |
| Fill the form > Send | Message "The message cannot be blank." is displayed |
| Click on "Contact us" in header > Fill the form again > Send | Message "Your message has been successfully sent to our team." is displayed |
| Check email received to the merchant to inform him of the message | in the email subject => 'Message from contact form' |
| Check email received to the customer to inform him the message has been sent successfully |  |
| Go to BO > Customer Service > Customer Service page | * The Customer Service page is well displayed & the last message is well displayed<br> * The email is ok<br> * the Messages is ok |
| Delete the last message & confirm the deletion | The alert "Successful deletion." is well displayed |