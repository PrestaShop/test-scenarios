---
title: "BO - Customer Service - View"
weight: 1
---

# BO - Customer Service - View
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-863
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/01_customerService/01_viewMessage.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customer-service/customer-service

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO > Go to Contact us Page > Fill Fields > Click Send | Message "Your message has been successfully sent to our team." appears |
| Go to BO > Customer Service > Customer Service > In Customer Service Block > Click View on latest thread | Thread is displayed |
| Go back to Customer Service Block > Click dropdown arrow > Click delete > In popup, choose YES | Thread is deleted<br>Message "Successful deletion." appears |
