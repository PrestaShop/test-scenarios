---
title: "BO - Customer Service - Contact options"
weight: 4
---

# BO - Customer Service - Contact options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-866
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/01_customerService/04_contactOptions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customer Service > Customer Service > Scroll to Contact options |  |
| Modify your text to have 2 different messages in FR and EN > Save > Switch language from FR to EN and vice versa | Default message should change when you switch language<br><br>Message "The settings have been successfully updated." appears |
| Go to FO > Click on Contact us > Fill fields > Send Message | Message "Your message has been successfully sent to our team." appears |
| In BO > Customer Service > Customer Service > Customer Service Block > A new message appears > Click on View | See the thread message<br><br>See the predefined message matches the languages |
| Go back to Customer Service page > Disable File Uploading > Save | Allow File uploading option is disabled<br><br>Message "The settings have been successfully updated." appears |
| Go to FO > Contact us Page > Fill Field > Click Send | Message "Your message has been successfully sent to our team." appears |
| In BO > Customer Service page > Click View on the latest message | See that the predefined message matches with the config in Customer Service Page |